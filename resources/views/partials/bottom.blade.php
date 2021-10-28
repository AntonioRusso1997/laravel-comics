<div class="main-bottom">
    <div class="bottom-content">
        @foreach ($banners as $banner)
        <ul>
          <li>
            <a href="{{$banner['url']}}">                    
            <img  src="{{$banner['img']}}" alt="">
            {{$banner['text']}}
            </a>
          </li>
        </ul>
        @endforeach
    </div>
</div>