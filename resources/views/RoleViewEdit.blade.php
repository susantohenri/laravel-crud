    <section class="main-section">
        <div class="content">
            @foreach($data as $datas)
            <form action="{{ route('role.update', $datas->id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label for="name">name:</label>
                    <input type="text" class="form-control" id="usr" name="name" value="{{ $datas->name }}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
            @endforeach
        </div>
    </section>