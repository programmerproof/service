<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito';
                zoom: 70%;
            }

            .method {
                width: 90%;
                padding: 12px 20px;
                margin: 8px 0;
                box-sizing: border-box;
                border: 3px solid #ccc;
                -webkit-transition: 0.5s;
                transition: 0.5s;
                outline: none;
                font-size: 14px;
            }

            input[type=text] {
                width: 100%;
                padding: 12px 20px;
                margin: 0 0 0 0;
                box-sizing: border-box;
                border: 3px solid #ccc;
                -webkit-transition: 0.5s;
                transition: 0.5s;
                outline: none;
            }

            input[type=number] {
                width: 20%;
                padding: 12px 20px;
                margin: 0 0 0 0;
                box-sizing: border-box;
                border: 3px solid #ccc;
                -webkit-transition: 0.5s;
                transition: 0.5s;
                outline: none;
            }

            input:focus {
                border: 3px solid #555;
            }

            button {
                text-align: right;
                font-family: "Roboto", sans-serif;
                text-transform: uppercase;
                outline: 0;
                background: #0172B6;
                width: 15%;
                border: 0;
                padding: 5px 36px 5px 5px;
                color: #FFFFFF;
                font-size: 14px;
                -webkit-transition: all 0.3 ease;
                transition: all 0.3 ease;
                cursor: pointer;
                text-align: left;
            }
            
            button:hover,.form button:active,.form button:focus {
                background: #D7D4DC;
                color: #000000;
            }

            .div-table {
                display: table;         
                width: auto;         
            }

            .div-table-row {
                display: table-row;
                width: auto;
                clear: both;
            }

            .div-table-col {
                float: left; /* fix for  buggy browsers */
                display: table-column;         
                width: auto;         
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-600 dark:bg-gray-400 sm:items-center sm:pt-0" >

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8" style="max-width: 100rem;">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <h1>
                        Api Service : Developed by Julían Baquero (jbaqueroinfo@gmail.com)
                    </h1>
                </div>

                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                <section>
            
                    <div class="container" data-aos="fade-up">
                        <div class="row justify-content-center align-items-center">
        
                            <div class="col-12 col-lg-5">
                                <h4>METHODS</h4>
                            </div>

                            <div class="col-12 col-lg-5">
                                <div class="card">
                                    <div class="card-body">
        
                                       
                                    <div class="div-table">
                                        <div class="div-table-row">
                                          <div class="div-table-col" style="width : 370px;">
                                            
                                            <div class="input-group mb-3">
                                                <span class="input-group-prepend">
                                                    <div class="input-group-text bg-transparent border-right-0 method">
                                                        <strong>GET</strong> /posts <button id="GET_posts" class="btn btn-empresa text-dark">Run</button>
                                                    </div>
                                                </span>
                                            </div>

                                            <div class="input-group mb-3">
                                                <span class="input-group-prepend">
                                                    <div class="input-group-text bg-transparent border-right-0 method">
                                                        <strong>GET</strong> /posts/<input style="width: 30%" min="1" max="100" pattern="^[0-9]+" type="number" value="{{$posts_id??1}}" name="GET_posts_id_input"> 
                                                        <button id="GET_posts_id"  class="btn btn-empresa text-dark">Run</button>
                                                    </div>
                                                </span>
                                            </div>

                                            <div class="input-group mb-3">
                                                <span class="input-group-prepend">
                                                    <div class="input-group-text bg-transparent border-right-0 method">
                                                        <strong>GET</strong> /posts/<input style="width: 30%" min="1" max="100" pattern="^[0-9]+" type="number" value="{{$posts_id_comments??1}}" name="GET_posts_id_input_comments">/comments 
                                                        <button id="GET_posts_id_comments"  class="btn btn-empresa text-dark">Run</button>
                                                    </div>
                                                </span>
                                            </div>

                                            <div class="input-group mb-3">
                                                <span class="input-group-prepend">
                                                    <div class="input-group-text bg-transparent border-right-0 method">
                                                        <strong>GET</strong> /comments?postId=<input style="width: 30%" min="1" max="100" pattern="^[0-9]+" type="number" value="{{$comments_postId??1}}" name="GET_comments_postId_input"> 
                                                        <button id="GET_comments_postId"  class="btn btn-empresa text-dark">Run</button>
                                                    </div>
                                                </span>
                                            </div>

                                            <div class="input-group mb-3">
                                                <span class="input-group-prepend">
                                                    <div class="input-group-text bg-transparent border-right-0 method">
                                                        <strong>GET</strong> /posts?userId=<input style="width: 30%" min="1" max="100" pattern="^[0-9]+" type="number" value="{{$posts_userId??1}}" name="GET_posts_userId_input"> 
                                                        <button id="GET_posts_userId"  class="btn btn-empresa text-dark">Run</button>
                                                    </div>
                                                </span>
                                            </div>
        
                                          </div>



                                           <div class="div-table-col" style="width : 310px;">
                                            
                                            <div class="input-group mb-3">
                                                <span class="input-group-prepend">
                                                    <div class="input-group-text bg-transparent border-right-0 method">
                                                        <div class="div-table">
                                                            <div class="div-table-row">
                                                              <div  class="div-table-col">
                                                                    <p>TITLE: <input type="text" value="{{$post_posts_title??'example'}}" name="POST_posts_title_input"></p>
                                                              </div>
                                                            </div>
                                                            <div class="div-table-row">
                                                                <div  class="div-table-col">
                                                                    <p>BODY: <input type="text" value="{{$post_posts_body??'example'}}" name="POST_posts_body_input"></p>
                                                                </div>
                                                            </div>
                                                            <div class="div-table-row">
                                                                <div  class="div-table-col">
                                                                    <p>USERID: <input style="width: 40%" min="1" max="100" pattern="^[0-9]+" type="number" value="{{$post_posts_userId??1}}" name="POST_posts_userId_input"></p>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                        <p><strong>POST</strong> /posts <button id="POST_posts" class="btn btn-empresa text-dark">Run</button></p>
                                                    </div>
                                                </span>
                                            </div>
        
                                          </div>

                                          <div  class="div-table-col" style="width : 300px;">
                                            
                                            <div class="input-group mb-3">
                                                <span class="input-group-prepend">
                                                    <div class="input-group-text bg-transparent border-right-0 method">
                                                        <div class="div-table">
                                                            <div class="div-table-row">
                                                                <div  class="div-table-col">
                                                                      <p>ID: <input style="width: 40%" min="1" pattern="^[0-9]+" type="number" value="{{$put_posts_id??1}}" name="PUT_posts_id_input"></p>
                                                                </div>
                                                              </div>
                                                            <div class="div-table-row">
                                                              <div  class="div-table-col">
                                                                    <p>TITLE: <input type="text" value="{{$put_posts_title??'example'}}" name="PUT_posts_title_input"></p>
                                                              </div>
                                                            </div>
                                                            <div class="div-table-row">
                                                                <div  class="div-table-col">
                                                                    <p>BODY: <input type="text" value="{{$put_posts_body??'example'}}" name="PUT_posts_body_input"></p>
                                                                </div>
                                                            </div>
                                                            <div class="div-table-row">
                                                                <div  class="div-table-col">
                                                                    <p>USERID: <input style="width: 40%" min="1" max="100" pattern="^[0-9]+" type="number" value="{{$put_posts_userId??1}}" name="PUT_posts_userId_input"></p>
                                                                </div>
                                                            </div>
                                                        </div>   
                                                        <p><strong>PUT</strong> /posts/ <button id="PUT_posts"  class="btn btn-empresa text-dark">Run</button></p>
                                                    </div>
                                                </span>
                                            </div>
        
                                          </div>


                                          <div  class="div-table-col" style="width : 300px;">
                                            
                                            <div class="input-group mb-3">
                                                <span class="input-group-prepend">
                                                    <div class="input-group-text bg-transparent border-right-0 method">
                                                        <div class="div-table">
                                                            <div class="div-table-row">
                                                                <div  class="div-table-col">
                                                                      <p>ID: <input style="width: 40%" min="1" pattern="^[0-9]+" type="number" value="{{$put_posts_id??1}}" name="PATCH_posts_id_input"></p>
                                                                </div>
                                                              </div>
                                                            <div class="div-table-row">
                                                              <div  class="div-table-col">
                                                                    <p>TITLE: <input type="text" value="{{$put_posts_title??'example'}}" name="PATCH_posts_title_input"></p>
                                                              </div>
                                                            </div>
                                                            <div class="div-table-row">
                                                                <div  class="div-table-col">
                                                                    <p>BODY: <input type="text" value="{{$put_posts_body??'example'}}" name="PATCH_posts_body_input"></p>
                                                                </div>
                                                            </div>
                                                            <div class="div-table-row">
                                                                <div  class="div-table-col">
                                                                    <p>USERID: <input style="width: 40%" min="1" max="100" pattern="^[0-9]+" type="number" value="{{$put_posts_userId??1}}" name="PATCH_posts_userId_input"></p>
                                                                </div>
                                                            </div>
                                                        </div>   
                                                        <p><strong>PATCH</strong> /posts/ <button id="PATCH_posts"  class="btn btn-empresa text-dark">Run</button></p>
                                                    </div>
                                                </span>
                                            </div>
        
                                          </div>



                                          <div  class="div-table-col" style="width : 250px;">
                                            
                                            <div class="input-group mb-3">
                                                <span class="input-group-prepend">
                                                    <div class="input-group-text bg-transparent border-right-0 method">
                                                        <div class="div-table">
                                                            <div class="div-table-row">
                                                                <div  class="div-table-col">
                                                                      <p>ID: <input style="width: 40%" min="1" pattern="^[0-9]+" type="number" value="{{$delete_posts_id??1}}" name="DELETE_posts_id_input"></p>
                                                                </div>
                                                              </div>
                                                        </div>   
                                                        <p><strong>DELETE</strong> /posts/ <button id="DELETE_posts"  class="btn btn-empresa text-dark">Run</button></p>
                                                    </div>
                                                </span>
                                            </div>
        
                                          </div>
                                          
                                    
                                    
                                    </div></div>
        
                                    </div>
                                </div>
                            </div>
        
                        </div>
                    </div>
        
                </section>
                </div>

                
                        @if(isset($get_posts))
                            <h4>METHOD: {{$get_posts}}</h4>
                        @endif
                        @if(isset($get_posts_id))
                            <h4>METHOD: {{$get_posts_id}}</h4>
                        @endif
                        @if(isset($get_posts_id_comments))
                            <h4>METHOD: {{$get_posts_id_comments}}</h4>
                        @endif
                        @if(isset($get_comments_postId))
                            <h4>METHOD: {{$get_comments_postId}}</h4>
                        @endif
                        @if(isset($get_posts_userId))
                            <h4>METHOD: {{$get_posts_userId}}</h4>
                        @endif
                        @if(isset($post_posts))
                            <h4>METHOD: {{$post_posts}}</h4>
                        @endif
                        @if(isset($put_posts))
                            <h4>METHOD: {{$put_posts}}</h4>
                        @endif
                        @if(isset($patch_posts))
                            <h4>METHOD: {{$patch_posts}}</h4>
                        @endif
                        @if(isset($delete_posts))
                            <h4>METHOD: {{$delete_posts}}</h4>
                        @endif

                        @if(isset($posts))
                        @php $ite = 0 @endphp
                        @foreach($posts as $post)
                            <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l" style="border-top: 0.1em solid #bbb; background-color : #{{ str_pad(sprintf("%x%x%x", rand(0,255), rand(0,255), rand(0,255)), 6 ,rand(0,$ite)) }} ">
                                    <div class="flex items-center">
                                        <div class="ml-4 text-lg leading-1 font-semibold">
                                            @if(isset($post->id))
                                                <h5>ID: {{$post->id}}</h5>
                                            @endif
                                            @if(isset($post->postId))
                                               <h5>POSTID: {{$post->postId}}</h5>
                                            @endif
                                            @if(isset($post->userId))
                                               <h5>USERID: {{$post->userId}}</h5>
                                            @endif
                                            @if(isset($post->title))
                                                <h5>TITLE: {{$post->title}}</h5>
                                            @endif
                                            @if(isset($post->name))
                                                <h5>NAME: {{$post->name}}</h5>
                                            @endif
                                            @if(isset($post->email))
                                                <h5>EMAIL: {{$post->email}}</h5>
                                            @endif
                                            @if(isset($post->body))
                                                <h5>BODY: {{$post->body}}</h5>
                                            @endif
                                        </div>
                                    </div>
                            </div>
                            @php $ite ++ @endphp
                        @endforeach
                        @endif
               
        </div>
        <script>
            const element = (_selector) => {
                return document.querySelector(_selector);
            };

            method =  element("#GET_posts"); 
            if (method !== null){
                method.onclick = (e) => {
                    window.location = 
                    "{{ url('GET/posts') }}";
                };
            }

            method =  element("#GET_posts_id"); 
            if (method !== null){
                method.onclick = (e) => {
                    let value = document.getElementsByName('GET_posts_id_input')[0].value;
                    window.location = 
                    "{{ url('/GET/posts') }}" + '/' + value;
                };
            }

            method =  element("#GET_posts_id_comments"); 
            if (method !== null){
                method.onclick = (e) => {
                    let value = document.getElementsByName('GET_posts_id_input_comments')[0].value;
                    window.location = 
                    "{{ url('/GET/posts') }}" + '/' + value + '/comments';
                };
            }

            method =  element("#GET_comments_postId"); 
            if (method !== null){
                method.onclick = (e) => {
                    let value = document.getElementsByName('GET_comments_postId_input')[0].value;
                    window.location = 
                    "{{ url('/GET/comments/postId') }}" + '/' + value;
                };
            }

            method =  element("#GET_posts_userId"); 
            if (method !== null){
                method.onclick = (e) => {
                    let value = document.getElementsByName('GET_posts_userId_input')[0].value;
                    window.location = 
                    "{{ url('/GET/posts/userId') }}" + '/' + value;
                };
            }

            method =  element("#POST_posts"); 
            if (method !== null){
                method.onclick = (e) => {
                    
                    path = '/POST/posts';
                    method='post';
                    params = {
                              _token : '{{ csrf_token() }}', 
                              title  : document.getElementsByName('POST_posts_title_input')[0].value,
                              body   : document.getElementsByName('POST_posts_body_input')[0].value,
                              userId : document.getElementsByName('POST_posts_userId_input')[0].value
                              };
                    const form = document.createElement('form');
                    form.method = method;
                    form.action = path;

                    for (const key in params) {
                        if (params.hasOwnProperty(key)) {
                        const hiddenField = document.createElement('input');
                        hiddenField.type = 'hidden';
                        hiddenField.name = key;
                        hiddenField.value = params[key];

                        form.appendChild(hiddenField);
                        }
                    }

                    document.body.appendChild(form);
                    form.submit();

                };
            }

            method =  element("#PUT_posts"); 
            if (method !== null){
                method.onclick = (e) => {
                    
                    path = '/PUT/posts';
                    method='post';
                    params = {
                              _token  : '{{ csrf_token() }}', 
                              _method : 'PUT', 
                              id      : document.getElementsByName('PUT_posts_id_input')[0].value,
                              title   : document.getElementsByName('PUT_posts_title_input')[0].value,
                              body    : document.getElementsByName('PUT_posts_body_input')[0].value,
                              userId  : document.getElementsByName('PUT_posts_userId_input')[0].value
                              };
                    const form = document.createElement('form');
                    form.method = method;
                    form.action = path;

                    for (const key in params) {
                        if (params.hasOwnProperty(key)) {
                        const hiddenField = document.createElement('input');
                        hiddenField.type = 'hidden';
                        hiddenField.name = key;
                        hiddenField.value = params[key];

                        form.appendChild(hiddenField);
                        }
                    }

                    document.body.appendChild(form);
                    form.submit();

                };
            }

            method =  element("#PATCH_posts"); 
            if (method !== null){
                method.onclick = (e) => {
                    
                    path = '/PATCH/posts';
                    method='post';
                    params = {
                              _token  : '{{ csrf_token() }}', 
                              _method : 'PATCH', 
                              id      : document.getElementsByName('PATCH_posts_id_input')[0].value,
                              title   : document.getElementsByName('PATCH_posts_title_input')[0].value,
                              body    : document.getElementsByName('PATCH_posts_body_input')[0].value,
                              userId  : document.getElementsByName('PATCH_posts_userId_input')[0].value
                              };
                    const form = document.createElement('form');
                    form.method = method;
                    form.action = path;

                    for (const key in params) {
                        if (params.hasOwnProperty(key)) {
                        const hiddenField = document.createElement('input');
                        hiddenField.type = 'hidden';
                        hiddenField.name = key;
                        hiddenField.value = params[key];

                        form.appendChild(hiddenField);
                        }
                    }

                    document.body.appendChild(form);
                    form.submit();

                };
            }

            method =  element("#DELETE_posts"); 
            if (method !== null){
                method.onclick = (e) => {
                    
                    path = '/DELETE/posts';
                    method='post';
                    params = {
                              _token  : '{{ csrf_token() }}', 
                              _method : 'DELETE', 
                              id      : document.getElementsByName('PUT_posts_id_input')[0].value,
                              title   : document.getElementsByName('PUT_posts_title_input')[0].value,
                              body    : document.getElementsByName('PUT_posts_body_input')[0].value,
                              userId  : document.getElementsByName('PUT_posts_userId_input')[0].value
                              };
                    const form = document.createElement('form');
                    form.method = method;
                    form.action = path;

                    for (const key in params) {
                        if (params.hasOwnProperty(key)) {
                        const hiddenField = document.createElement('input');
                        hiddenField.type = 'hidden';
                        hiddenField.name = key;
                        hiddenField.value = params[key];

                        form.appendChild(hiddenField);
                        }
                    }

                    document.body.appendChild(form);
                    form.submit();

                };
            }

        </script>
    </body>
</html>
