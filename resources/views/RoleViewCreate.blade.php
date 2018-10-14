    <section class="main-section">
        <div class="content">
            <form action="{{ route('role.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">name:</label>
                    <input type="text" class="form-control" id="usr" name="name">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
        </div>
        <!-- /.content -->
    </section>