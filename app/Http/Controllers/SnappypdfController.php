<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\CardDetails;
use Illuminate\Http\Request;
use Knp\Snappy\Pdf as Snappy;
use PDF;
class SnappypdfController extends Controller
{
    public function iddesign()
    {
        $students = CardDetails::latest()->limit(1000)->get();

        $pdf = PDF::setOption('enable-local-file-access', true)
            ->loadView('products.iddesign', [
                'students' => $students
            ])
            ->setOption('page-width', 85)
            ->setOption('page-height', 55)->setOption('margin-left', 0)
            ->setOption('margin-right', 0)->setOption('margin-top', 0)
            ->setOption('margin-bottom', 0);
        //dd($students);
        return $pdf->inline('abc.pdf');
    }

    public function welcome()
    {
        $products = Product::latest()->paginate(5);
    
        $pdf = PDF::loadView('products.welcome', [
            'products' => $products
        ]);
        return $pdf->inline('abc.pdf');
    }

    public function radiantid()
    {
        $pdf = PDF::setOption('enable-local-file-access', true)
        ->loadView('products.radiantid')
        ->setOption('page-width', 66)
            ->setOption('page-height', 101)->setOption('margin-left', 0)
            ->setOption('margin-right', 0)->setOption('margin-top', 0)
            ->setOption('margin-bottom', 0);
        return $pdf->inline('abc.pdf');
    }

    public function hzsdegriclg()
    {
        $pdf = PDF::setOption('enable-local-file-access', true)
        ->loadView('products.hzsdegriclg')
        ->setOption('page-width', 54)
            ->setOption('page-height', 86)->setOption('margin-left', 0)
            ->setOption('margin-right', 0)->setOption('margin-top',0)
            ->setOption('margin-bottom', 0);
        return $pdf->inline('abc.pdf');
    }

    public function hzsdegriclgback()
    {
        $pdf = PDF::setOption('enable-local-file-access', true)
        ->loadView('products.hzsdegriclgback')
        ->setOption('page-width', 54)
            ->setOption('page-height', 86)->setOption('margin-left', 0)
            ->setOption('margin-right', 0)->setOption('margin-top', 0)
            ->setOption('margin-bottom', 0);
        return $pdf->inline('abc.pdf');
    }

    public function frii()
    {
        $pdf = PDF::setOption('enable-local-file-access', true)
        ->loadView('products.frii')
        ->setOption('page-width', 54)
            ->setOption('page-height', 87)->setOption('margin-left', 0)
            ->setOption('margin-right', 0)->setOption('margin-top', 0)
            ->setOption('margin-bottom', 0);
        return $pdf->inline('abc.pdf');
    }

    public function friiback()
    {
        $pdf = PDF::setOption('enable-local-file-access', true)
        ->loadView('products.friiback')
        ->setOption('page-width', 54)
            ->setOption('page-height', 86)->setOption('margin-left', 0)
            ->setOption('margin-right', 0)->setOption('margin-top', 0)
            ->setOption('margin-bottom', 0);
        return $pdf->inline('abc.pdf');
    }
}
