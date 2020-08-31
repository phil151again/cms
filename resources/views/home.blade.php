@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quae nesciunt, labore delectus veniam necessitatibus nobis neque inventore reiciendis doloremque suscipit veritatis magni fuga! Distinctio blanditiis dolorem eius numquam et voluptatibus reprehenderit maxime sint consectetur quae quaerat illum amet, totam cumque eligendi suscipit pariatur, quod fugit, cum iusto dolores sed.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis quaerat, ipsam, assumenda, voluptate deleniti quod ipsum atque, ratione similique ullam iure est modi dolores aperiam saepe culpa sapiente id. Voluptatem soluta eius reprehenderit numquam explicabo ea, eligendi. Id tenetur atque porro architecto minima maxime repudiandae deleniti nisi labore, inventore earum.</p>
                <h1>lorem</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio fugiat dolorum doloremque repudiandae blanditiis obcaecati, error tenetur, provident incidunt labore, inventore saepe odio, laboriosam nesciunt ducimus. Labore assumenda, porro fugit, omnis ea qui dicta eum nobis quis, autem necessitatibus ipsum aperiam officiis facere nulla sunt et pariatur voluptas alias enim?</p>
            </div>
        </div>
    </div>
</div>
@endsection
