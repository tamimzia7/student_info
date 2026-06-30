<div>
    <h1> update data</h1>
    <form action="" method="post">
        @csrf
        <input type="text" name="name" value={{$data->name}} placeholder="enter name"/>
        
                <input type="text" name="email" value={{$data->email}} placeholder="enter email"/>

                        <input type="text" name="phone_number" value={{$data->phone_number}} placeholder="enter phone"/>
                        <button>update</button>
                        <a href="/list">cancel</a>








    </form>
</div>
