@extends('templates.index')

@section('css', 'css/style2.css')

@section('content')

<div class="formbold-main-wrapper">
    <div class="formbold-form-wrapper">
        <h2>Edit Ressource</h2>
        <form  method="post" action="{{route('ressources.update', ['ressource' => $ressource ])}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
          <div class="formbold-input-flex">
            <div>
                <input
                type="text"
                name="name"
                id="name"
                value="{{$ressource->name}}"
                class="formbold-form-input"
                />
                <label for="name" class="formbold-form-label"> Name </label>
                </div>
            </div>
            <div class="formbold-textarea">
                <textarea
                    rows="6"
                    name="text"
                    id="text"
                    class="formbold-form-input"
                >{{$ressource->text}}</textarea>
                <label for="text" class="formbold-form-label"> Description </label>
            </div>

        <div class="formbold-input-flex">
            <label for="text" class="formbold-form-label"> Storage</label>
            <input type="number" id="storage" name="storage" min="1" max="999" value="{{$ressource->storage}}">
            
        </div> 

        <div>
            <label for="text" class="formbold-form-label"> Image</label>
            <input type="file" id="img" name="image">
        </div> 

        <div class="formbold-input-flex">
            <div>
                <select id="categories_id" name="categories_id">
                    <option  selected value="{{$ressource->categories_id}}">{{$ressource->category->name}}</option>
                    @foreach (\App\Models\Category::all() as $categories)
                        <option value="{{ $categories->id }}">{{ $categories->name }}</option>
                    @endforeach
                </select>
                <label for="name" class="formbold-form-label"> Category </label>
            </div>
  
          <input class="formbold-btn" type="submit" value="Submit">
      </form>
    </div>
  </div>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body {
      font-family: "Inter", sans-serif;
    }
    h2{
       padding-top:1em; 
       
    }
    .formbold-main-wrapper {
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 48px;
      box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
      
    }
  
    .formbold-form-wrapper {
      margin: 0 auto;
      max-width: 550px;
      width: 100%;
      background: white;
      padding: 60px;
      border-radius: 2%;
    }
  
    .formbold-input-flex {
      /* display: flex; */
      /* gap: 20px; */
      margin-bottom: 2em;
      margin-top:2em;
    }
    .formbold-input-flex > div {
      width: 100%;
      display: flex;
      flex-direction: column-reverse;
    }
    .formbold-textarea {
      display: flex;
      flex-direction: column-reverse;
      padding-left: 0;
    }
  
    .formbold-form-input {
      width: 100%;
      padding-bottom: 10px;
      border: none;
      border-bottom: 1px solid #DDE3EC;
      background: #FFFFFF;
      font-weight: 500;
      font-size: 16px;
      color: #07074D;
      outline: none;
      resize: none;
    }
    .formbold-form-input::placeholder {
      color: #536387;
    }
    .formbold-form-input:focus {
      border-color: #6A64F1;
    }
    .formbold-form-label {
      color: #07074D;
      font-weight: 500;
      font-size: 14px;
      line-height: 24px;
      display: block;
      margin-bottom: 18px;
    }
    .formbold-form-input:focus + .formbold-form-label {
      color: #6A64F1;
    }
  
    .formbold-input-file {
      margin-top: 30px;
    }
    .formbold-input-file input[type="file"] {
      position: absolute;
      top: 6px;
      left: 0;
      z-index: -1;
    }
    .formbold-input-file .formbold-input-label {
      display: flex;
      align-items: center;
      gap: 10px;
      position: relative;
    }
  
    .formbold-filename-wrapper {
      display: flex;
      flex-direction: column;
      gap: 6px;
      margin-bottom: 22px;
    }
    .formbold-filename {
      display: flex;
      align-items: center;
      justify-content: space-between;
      font-size: 14px;
      line-height: 24px;
      color: #536387;
    }
    .formbold-filename svg {
      cursor: pointer;
    }
  
    .formbold-btn {
      font-size: 16px;
      border-radius: 5px;
      padding: 12px 25px;
      border: none;
      font-weight: 500;
      background-color: #6A64F1;
      color: white;
      cursor: pointer;
      margin-top: 25px;
    }
    .formbold-btn:hover {
      box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
    }
  </style>
@stop