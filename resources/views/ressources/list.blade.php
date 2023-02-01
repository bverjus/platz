<div id="content">
    @foreach ($ressources as $ressource )
      <figure class="white">
        <a href="{{route('ressources.show', ['id' => $ressource->id ])}}">
          <img src="storage/img/{{$ressource->img}}" alt="" />
          <dl>
            <dt>{{$ressource->name}}</dt>
            <dd>
              {{substr($ressource->text, 0, 150)}}
            </dd>
          </dl>
        </a>
        <div id="wrapper-part-info">
          <div class="part-info-image">
            <img src="img/{{$ressource->category->logo}}" alt="" width="28" height="28" />
          </div>
          <div id="part-info">{{substr($ressource->name, 0, 15)}}</div>
        </div>
      </figure>  
      @endforeach
</div>