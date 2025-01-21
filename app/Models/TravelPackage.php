<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TravelPackage extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = [
        'title',
        'description',
        'price',
    ];

    public function galleries(): HasMany
    {
        return $this->hasMany(Gallery::class);
    }

    public function show($id)
    {
        // Ambil data travel package dari database menggunakan ID
        $travel_package = TravelPackage::find($id);

        if (!$travel_package) {
            return redirect()->route('home')->with('error', 'Travel package not found!');
        }

        // Kirimkan data travel_package ke view
        return view('frontend.travel.payment', compact('travel_package'));
    }
}
