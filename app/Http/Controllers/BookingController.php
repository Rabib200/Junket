<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\TourPlan;
use Illuminate\Http\Request;
use Dompdf\Dompdf;

class BookingController extends Controller
{
    public function checkout($id){
        $tour = TourPlan::where('id',$id)->first();
        return view('frontend.checkout', compact('tour'));
    }
    public function booking(Request $request){
        $booking = new Booking();
        $booking->tour_id = $request->tour_id;
        $booking->name = $request->name;
        $booking->email = $request->email;
        $booking->phone = $request->phone;
        $booking->street = $request->street;
        $booking->house = $request->house;
        $booking->payment = $request->payment;
        $booking->save();
        return redirect()->back()->with('message','Booking is accepted, please download your invoice');
    }
    public function invoice($id){
        $tour = TourPlan::where('id',$id)->first();
     $data = [
        'tour'=>$tour
     ]; // Any data you want to pass to the view

    $pdf = new Dompdf();
    $html = view('invoice.index', $data)->render(); // Render the Blade view with data
    $pdf->loadHtml($html);

    // (Optional) Set paper size and orientation
    $pdf->setPaper('A4', 'portrait');

    // Render PDF (important to call this before output)
    $pdf->render();

    // Output PDF to the browser
    return $pdf->stream('invoice'.$id.'.pdf');
    }
}