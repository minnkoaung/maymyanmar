<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
		return view('pages.index');
	}
	 public function search() {
		return view('pages.search');
	}
	public function services() {
		return view('pages.services');
	}
	public function training() {
		return view('pages.training');
	}
	public function testimonials() {
		return view('pages.testimonials');
	}
	public function faqs() {
		return view('pages.faqs');
	}
	public function joinus() {
		return view('pages.joinus');
	}
	public function contact() {
		return view('pages.contact');
	}
}
