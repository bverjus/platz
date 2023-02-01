@extends('templates.index')

@section('css', 'css/style2.css')

@section('content')
<div id="wrapper-container">
  <div class="container object">
    <div id="main-container-image">
      <div class="title-item">
        <div class="title-icon"></div>
        <div class="title-text">{{$ressource->name}}
        </div>
        <div class="title-text-2">{{date_format($ressource->created_at,"d.m.Y")}} by {{$ressource->createur->name}}</div>
      </div>

      <div class="work">
        <figure class="white">
          <img src="storage/img/{{$ressource->img}}" alt="" />
          <figcaption>

            <a
              href="{{route('ressources.edit', $ressource)}}"
              class="btn btn-primary"
              style="display: inline-block; margin: 1em 0"
              >Edit</a
            >
            <form action="{{route('ressources.destroy', $ressource)}}" method="post">
              @csrf
              @method('delete')
            <input
              type="submit"
              value="Delete"
              class="btn btn-secondary"
              style="display: inline-block; margin: 1em 0"
              >
          </form>
          </figcaption>
        </figure>

        <div class="wrapper-text-description">
          <div class="wrapper-file">
            <div class="icon-file">
              <img
                src="img/{{$ressource->category->logo}}"
                alt=""
                width="21"
                height="21"
              />
            </div>
            <div class="text-file">{{$ressource->category->name}}</div>
          </div>

          <div class="wrapper-weight">
            <div class="icon-weight">
              <img
                src="img/icon-weight.svg"
                alt=""
                width="20"
                height="23"
              />
            </div>
            <div class="text-weight">{{$ressource->storage}} Mo</div>
          </div>

          <div class="wrapper-desc">
            <div class="icon-desc">
              <img src="img/icon-desc.svg" alt="" width="24" height="24" />
            </div>
            <div class="text-desc">
              {{$ressource->text}}
            </div>
          </div>

          <div class="wrapper-download">
            <div class="icon-download">
              <img
                src="img/icon-download.svg"
                alt=""
                width="19"
                height="26"
              />
            </div>
            <div class="text-download">
              <a href="#"><b>Download</b></a>
            </div>
          </div>

          <div class="wrapper-morefrom">
            <div class="text-morefrom">More from {{$ressource->category->name}}</div>
            <div class="image-morefrom">
              @for ($i = 1; $i < 5; $i++)
              <a href="#"
              ><div class="image-morefrom-{{strval($i)}}">
                <img
                  src="img/font-{{strval($i)}}.jpg"
                  alt=""
                  width="430"
                  height="330"
                /></div
            ></a>
              @endfor
            </div>
          </div>
        </div>

        <div class="post-reply">
          <div id="title-post-send">
            <hr />
            <h2>Your comments</h2>
          </div>
        </div>
       
          <div class="post-reply-comments">
            {{-- <div class="image-reply-post"></div> --}}
            @foreach ($comments as $comment)
            <div>
            <div class="name-reply-post">{{$comment->pseudo}}</div>
            <div class="text-reply-post">{{$comment->text}}</div>
            </div>
            @endforeach
          </div>

        <div class="post-send">
          <div id="main-post-send">
            <div id="title-post-send">Add your comment</div>
            <form
              id="contact"
            >
            @csrf
            <label for="name" class="formbold-form-label"> Pseudo </label>
            <input
                  type="text"
                  name="pseudo"
                  id="pseudo"
                  class="formbold-form-input"
                  />
                
              <fieldset style="margin-top: 2em">
                <p>
                  <textarea
                    id="message"
                    name="message"
                    maxlength="500"
                    placeholder="Votre Message"
                    tabindex="5"
                    cols="30"
                    rows="4"
                  ></textarea>
                </p>
              </fieldset>
              <input type="hidden" value="{{$ressource->id}}" id="id" name="id">
              <div style="text-align: center">
                <input type="submit" name="envoi" value="Envoyer" />
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="wrapper-thank">
    <div class="thank">
      <div class="thank-text">
        bu<span style="letter-spacing: -5px">rs</span>tfly
      </div>
    </div>
  </div>

  @include('templates.partials._footer')

  @include('templates.partials._copyright')

</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.scrollTo.min.js"></script>
    <script type="text/javascript" src="js/jquery.localScroll.min.js"></script>
    <script
      type="text/javascript"
      src="js/jquery-animate-css-rotate-scale.js"
    ></script>
    <script type="text/javascript" src="js/fastclick.min.js"></script>
    <script type="text/javascript" src="js/jquery.flip.min.js"></script>
    <script
      type="text/javascript"
      src="js/jquery.animate-colors-min.js"
    ></script>
    <script
      type="text/javascript"
      src="js/jquery.animate-shadow-min.js"
    ></script>
    <script type="text/javascript" src='js/app.js'></script>
@stop