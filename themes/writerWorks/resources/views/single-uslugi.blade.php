@extends('layouts.app')

@section('content')
  <div class="singleService">
    <h2 class="singleService-title">{!! get_the_title() !!}</h2>
    <ul class="singleService-features features">
      @foreach($top_bar as $text)
        <li class="features-item">{{ $text->title }}</li>
      @endforeach
    </ul>

    <div class="singleService-product product-wrp">
      <div class="product"></div>
      <div class="product-info">{!! the_field('decritption_with_price_usluga',$post) !!}</div>
      <div class="product-include">
        <p>{!! pll_e('В стоимость входит:','sage') !!}</p>
        <ul>
          @foreach($first_section_ul as $text)
            <li>{{ $text->title }}</li>
          @endforeach
        </ul>
      </div>
    </div>

    <div class="singleService-howtoBuy howtoBuy">
      <h2 class="howtoBuy-title">{!! the_field('title_scetion_second_usluga',$post) !!}</h2>
      <p class="howtoBuy-text">{!! the_field('description_scetion_second_usluga',$post) !!}</p>

      <h4 class="howtoBuy-subtitle">{!! the_field('text_before_list_specialnosti_usluga',$post) !!}</h4>
      <ul class="howtoBuy-list">
        @foreach($list_specialnost_usluga as $text)
        <li class="howtoBuy-item">{{ $text->title }}</li>
        @endforeach
      </ul>
    </div>

    <div class="singleService-howMuch howMuch">
      <h2 class="howMuch-title">{!! the_field('title_section_third_usluga',$post) !!}</h2>
      <div class="howMuch-text">{!! the_field('description_section_third_usluga',$post) !!}</div>
    </div>

    <div class="singleService-whtaInclude whtaInclude">
      <h2 class="whtaInclude-title">{!! the_field('title_section_fourth_usluga',$post) !!}</h2>
      <div class="whtaInclude-text">{!! the_field('description_section_fourth_usluga',$post) !!}</div>
      <h3 class="whtaInclude-subtitle">{!! the_field('title_section_fifth_usluga',$post) !!}</h3>
       <ul class="whtaInclude-list">
         @foreach($list_garant_usluga as $content)
         <li class="whtaInclude-item">
           <h4 class="whtaInclude-itemTitle">{{ $content->title }}</h4>
           <p class="whtaInclude-itemText">{{ $content->description }}</p>
         </li>
         @endforeach
      </ul>
    </div>

    <div class="singleService-callUs callUs">
       <h2 class="callUs-title"></h2>
        <p class="callUs-text"></p>
    </div>

  </div>
@endsection
