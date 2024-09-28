<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

     

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<link rel="stylesheet" href="{{asset('/css/contact.css')}}">

    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">

        <section class="containerAll">

            <form method="GET" action="/contact" class="items">
                @csrf

                <div>
                    
                    <div>
                        <h1 class="title">Contact</h1>
                    </div>
                  
                    <div class="input-group mb-3">
                       
                        <input type="text" name="userName" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required>
                      </div>

                      <div class="input-group mb-3">
                       
                        <input type="email" name="email" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1" required>
                      </div>

                      <div class="input-group mb-3">
                       
                        <input type="text" name="subject" class="form-control" placeholder="Subject" aria-label="Username" aria-describedby="basic-addon1" required>
                      </div>

                    <div class="form-floating">
                      
                        <textarea class="form-control" name="content" placeholder="Leave the message here" id="floatingTextarea" required></textarea>
                        <label for="floatingTextarea">Leave The message here</label>
                      </div>


                </div>

                <div class="containerButton">
                    <button type="submit" class="btn btn-success">Success</button>
                </div>

                @if(isset($ok)) 

                <div class="alertStyle alert alert-success" role="alert">
                  Email sent successfully
                </div>

                <script>

                    setTimeout(() => {
                               window.location.href = "/"
                    }, 2000);
             

                </script>

                @endif
                
             

            </form>
            
        </section>
      
    </body>
</html>
