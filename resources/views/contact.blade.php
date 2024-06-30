@extends('template.features')
@section('css')
<link rel="stylesheet" href="{{ minify('css/contact.css') }}" >
@endsection
@section('app', 'contact')
@section('main')
<style>
  .login_img_section {
  background: linear-gradient(rgba(2,2,2,.7),rgba(0,0,0,.7)),url(https://images.unsplash.com/photo-1650825556125-060e52d40bd0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80) center center;
}
</style>
<div class="h-screen flex">
  <div class="hidden lg:flex w-full lg:w-1/2 login_img_section
  justify-around items-center">
    <div 
          class=" 
          bg-black 
          opacity-20 
          inset-0 
          z-0"
          >

          </div>
  </div>
  <div class="flex w-full lg:w-1/2 justify-center items-center bg-white space-y-8">
    <div class="w-full px-8 md:px-32 lg:px-24">
    <form action="{{ route('sent') }}" method="post" class="bg-white rounded-md shadow-2xl p-5">
      @method('POST')
      @csrf
      <h1 class="text-gray-800 font-bold text-2xl mb-5 text-center">Nous contacter</h1>
      <div class="flex items-center border-2 mb-8 py-2 px-3 rounded-2xl">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
          <path fillRule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clipRule="evenodd" />
        </svg>
        <input id="email" class=" pl-2 w-full outline-none border-none" type="email" name="email" value="{{ old('email') }}" placeholder="Addresse email" />
      </div>              
      <div class="flex items-center border-2 mb-8 py-2 px-3 rounded-2xl">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
          <path fillRule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clipRule="evenodd" />
        </svg>
        <input id="name" class=" pl-2 w-full outline-none border-none" type="text" name="name" value="{{ old('name') }}" placeholder="Nom et prénom" />
      </div>
      <div class="flex items-center border-2 mb-12 py-2 px-3 rounded-2xl ">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
          <path fillRule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clipRule="evenodd" />
        </svg>
        <input class="pl-2 w-full outline-none border-none" type="text" name="text" id="text" value="{{ old('text') }}" placeholder="Message" />
        
      </div>
      <button type="submit" class="btn float-right">Envoyer</button>
    </form>
    </div>
    
  </div>
</div>
@endsection
@section('js', 'contact')
