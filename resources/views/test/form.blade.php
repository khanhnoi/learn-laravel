<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form KN</title>
</head>

<body>
    <h1>Form</h1>
    <button><a href="<?php echo route('test.form') ?>">Form Name</a></button> <br />
    
    
    <form method="POST" action="/test-by-form">
        <input type="text" name='username' placeholder="name">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        {{-- {{ csrf_field() }} --}}
        <button type="submit">Submit Post</button>
    </form>


    <form method="POST" action="/test-by-form">
        <input type="text" name='username' placeholder="name">
        <input type="hidden" name='_method' value="PUT">

        {{ csrf_field() }}
        <button type="submit">Submit PUT</button>
    </form>



    <form method="POST" action="/test-by-form">
        <input type="text" name='username' placeholder="name">
        <input type="hidden" name='_method' value="DELETE">

        {{-- {{ csrf_field() }} --}}
        @csrf
        <button type="submit">Submit Delele</button>
    </form>


    <form method="POST" action="/test-by-form">
        <input type="text" name='username' placeholder="name">
        <input type="hidden" name='_method' value="PATCH">

        {{ csrf_field() }}
        <button type="submit">Submit Patch</button>
    </form>

    <br />


    <form method="POST" action="/test-by-form-match">
        <input type="text" name='username' placeholder="name">
        <input type="hidden" name='_method' value="GET">

        {{ csrf_field() }}
        <button type="submit">Submit Match GET</button>
        <button><a href="/test-by-form-match">Link Match GET</a></button>

    </form>


    <form method="POST" action="/test-by-form-match">
        <input type="text" name='username' placeholder="name">
        <input type="hidden" name='_method' value="POST">

        {{ csrf_field() }}
        <button type="submit">Submit Match POST</button>
    </form>

    <form method="POST" action="/test-by-form-match">
        <input type="text" name='username' placeholder="name">
        <input type="hidden" name='_method' value="DELETE">

        {{ csrf_field() }}
        <button type="submit">Submit Match DELETE</button>
    </form>

    <br />

    <form method="GET" action="/test-by-form-any">
        <input type="text" name='username' placeholder="name">
        <input type="hidden" name='_method' value="GET">

        {{ csrf_field() }}
        <button type="submit">Submit any GET</button>
        <button><a href="/test-by-form-match">Submit any GET</a></button>

    </form>



    <form method="POST" action="/test-by-form-any">
        <input type="text" name='username' placeholder="name">
        <input type="hidden" name='_method' value="POST">

        {{ csrf_field() }}
        <button type="submit">Submit any POST</button>
    </form>

    <form method="POST" action="/test-by-form-any">
        <input type="text" name='username' placeholder="name">
        <input type="hidden" name='_method' value="DELETE">

        {{ csrf_field() }}
        <button type="submit">Submit any DELETE</button>
    </form>


   
    <button><a href="/test-redirect">Test Redirect</a></button>
    <br />
    <button><a href="/test-view">Test View</a></button>
    <br />
   
    <button><a href="/test-group">Test Group</a></button> <br />
    <button><a href="/test-group-2">Test Group</a></button> <br />

    <button><a href="/test-id/123">Test Id</a></button> <br />
    <button><a href="<?php echo route('test.id', [ 'someThing' => uniqid(), 'id' => rand(0,10000)]) ?>">Test Id Name</a></button> <br />
    <button><a href="/test-id-null">Test Id Null</a></button> <br />

    <button><a href="/test-slug/slug-id-id">Test slug and Id</a></button> <br />
    <button><a href="/test-slug/slug-id-id">Test slug and Id Validate</a></button> <br />
    <br /><br /><br />

    <button><a href="/test-middle/test">test-middle</a></button> <br />


    <button><a href="/test-form-controller">test-controller</a></button> <br />
    
    
   
   
</body>

</html>
