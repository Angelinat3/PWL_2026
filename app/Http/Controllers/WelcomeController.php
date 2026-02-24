<?php 
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    
    class WelcomeController extends Controller{
        public function hello() {
    	    return 'Hello World';
	    }
        public function index() {
            return 'Welcome';
        }
        public function about($name = 'Angel', $NIM = '244107020076') {
            return 'My name is '.$name.' and my NIM is '.$NIM;
        }
        public function articles($id) {
            return 'Article Page with ID '.$id;
        }
    }