<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\TravelPackage;

class OrderController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function payment(TravelPackage $travelPackage)
    {
        // Kirim travelPackage ke view
        return view('frontend.travel.payment', compact('travelPackage'));
    }

    public function show($slug)
    {
        // Ambil travel package berdasarkan slug
        $travel_package = TravelPackage::where('slug', $slug)->first();

        // Jika data tidak ditemukan, redirect atau tampilkan pesan error
        if (!$travel_package) {
            return redirect()->route('home')->with('error', 'Travel package not found!');
        }

        // Kirimkan data travel_package ke view
        return view('frontend.travel.payment', compact('travel_package'));
    }

    public function checkout(Request $request, $slug)
    {
        // Ambil travel package berdasarkan slug
        $travel_package = TravelPackage::where('slug', $slug)->first();

        // Jika data tidak ditemukan, redirect atau tampilkan pesan error
        if (!$travel_package) {
            return redirect()->route('home')->with('error', 'Travel package not found!');
        }

        // Hitung total_price berdasarkan jumlah orang
        $total_price = $request->people * $travel_package->price;

        // Tambahkan data total_price dan status ke dalam request
        $data = $request->all();
        $data['total_price'] = $total_price;
        $data['status'] = $request->status ?? 'Belum Dibayar';  // Set default status jika tidak ada

        // Simpan data ke tabel 'orders' dengan field yang sesuai
        $order = Order::create($data);

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        \Midtrans\Config::$isProduction = false;
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => $order->id,
                'gross_amount' => $order->total_price,
            ),
            'customer_details' => array(
                'name' => $request->name,
                'email' => $request->email,
                'address' => $request->address,
                'phone' => $request->phone,
                'people' => $request->people,
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        // Kirimkan snapToken dan order ke view
        return view('frontend.travel.checkout', compact('snapToken', 'order', 'travel_package'));
    }
}
