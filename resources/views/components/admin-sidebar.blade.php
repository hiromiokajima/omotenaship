{{-- admin sidebar --}}
<div class="col-lg-2">
    <div class="list-group admin-list-group d-flex">
        <h6>Admin page</h6>
        
        <a class="text-decoration-none text-dark admin-sidebar-link" href="{{ route('admin.users.index') }}"><i class="fa-solid fa-users"></i> Users</a>  

        <a class="text-decoration-none text-dark admin-sidebar-link" href="{{ route('admin.posts.index') }}"><i class="fa-solid fa-pen-to-square"></i> Posts</a>

        <a class="text-decoration-none text-dark admin-sidebar-link" href="{{ route('admin.ngwords.index') }}"><i class="fa-solid fa-square-xmark"></i> NG words</a>

        <a class="text-decoration-none text-dark admin-sidebar-link" href="{{ route('admin.inquires.index') }}"><i class="fa-regular fa-circle-question"></i> Inquires</a>
    </div>
</div>

