@extends('layouts.base')

@section('content')

  <div class="container font-light leading-loose tracking-wide">

    <h1>A complete guide to internationalize software</h1>

    <p class="mb-6">
      This website aims to be an easy-to-read, quick reference for internationalization best
      practices and authoritative content around the Web.
    </p>

    <p class="mb-6">
      There is no canonical way to international software. At some point you will want your software
      to go further and you’ll start internationalizing it. It’s hard to know which way to do it
      because there are so many ways. This website will not tell you which tools to use, but
      instead offer suggestions for multiple options, when possible explaining the differences in
      approach and use-case.
    </p>

	  <p class="mb-6">
      This is a living document and will continue to be updated with more helpful information and
		  examples as they become available.
	  </p>

  </div>

  <div class="container">

    @include('_partials/email-form')

  </div>

@endsection
