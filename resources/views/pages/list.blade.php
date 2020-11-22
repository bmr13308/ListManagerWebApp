@extends('layouts.app', ['title' => 'My List'])

@section('content')
<div class="main__container">

  <div class="list-container">
    <ul id="list-1" class="custom-list">

      @if(count($list1) > 0)
        @foreach($list1 as $listItem)
        <li class="list__item" data-id="{{$listItem->id}}">{{$listItem->text}}</li>
        @endforeach
      @endif
      
  
    </ul>

    <ul id="list-2" class="custom-list">
        @if(count($list2) > 0)
          @foreach($list2 as $listItem)
                <li class="list__item" data-id="{{$listItem->id}}">{{$listItem->text}}</li>
        @endforeach
        @endif
    </ul>
  </div>

  <input id="button-save" class="form__element form__submit" type="button" value="SAVE">

  <div id="list-message"class="flex-center form__message">
    @if(session('status'))
    <p id="list-message">
      {!!session('status')!!}
    </p>
    @endif
  </div>


  

  <script src="{{asset('/js/list-manager.js')}}"></script>
</div>
@endsection