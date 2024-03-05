<style>
    label{
        margin-right: 50px;
    }
    #label-name{
        margin-right: 77px;
    }
    div{
        margin-bottom: 30px;
    }
</style>
<form action="" method="POST">
    @csrf
    <div>
        <label for="" id="label-name">Name</label>
        <input type="text" name="name" id="" placeholder="Name" value="{{old('name')}}">
    </div>
     <div>
        <label for="">Username</label>
        <input type="text" name="user_name" id="" placeholder="User name" value="{{old('user_name')}}">
     </div>
     <div>
        <label for="">Password</label>
     <input type="text" name="password" id="" placeholder="Password" value="{{old('password')}}">
     </div>
     <button type="submit">Register</button>

</form>