<div>
<h2>add new user</h2>

<form action="adduser" method="post">
    @csrf
    <div class="input-wraper">
        <input type="text" placeholder="enter username" value="{{ old('username') }}" name="username" id="username" class="{{ ($errors->first('username')?'input-error':'') }}">
        <span class="error">@error('username'){{ $message }} @enderror</span>

    </div>
    <div class="input-wraper">
        <input type="text" placeholder="enter email" value="{{ old('email') }}" name="email" id="email" class="{{{ ($errors->first('email')?'input-error':'') }}}">
        <span class="error">@error('email'){{ $message }} @enderror</span>
    </div>
    <div class="input-wraper">
        <input type="text" placeholder="enter city" name="city" value="{{ old('city') }}" class="{{ ($errors->first('city')?'input-error':'') }}" id="city">
        <span class="error">@error('city'){{ $message }} @enderror</span>
    </div>
    {{-- <div class="checkbox">
        <input type="checkbox" name="skill[]" value="php" id="php">
        <label for="php">php</label>

        <input type="checkbox" name="skill[]" value="node" id="node">
        <label for="node">node</label>

        <input type="checkbox" name="skill[]" value="java" id="java">
        <label for="java">java</label>

        <span class="error" style="margin-left: 25px;">@error('skill'){{ $message }}

        @enderror</span>

    </div> --}}

    <button type="submit">submit</button>
</form>
</div>

<style>
    .error{
        color:red;
        font-size: 14px
    }

    .input-error {
        border: 1px solid red !important;
        color: red !important;

    }

    .checkbox{
        margin: 10px;
    }


    .input-wraper input{
        border: orange 1px solid;
        height: 35px;
        margin: 10px;
        color: orange;
        display: inline-block;

    }

    button{
        margin: 10px;
        color: green;
        background-color: lightgreen;
        width: 255px;
        height: 35;
    }
</style>
