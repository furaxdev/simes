<div class="c-sidebar  c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <div class="c-sidebar-brand" >
        <a href="">
        <img style="cursor:pointer;" class="c-sidebar-brand-full" src={{asset('front/img/11.png')}} width="80" height="80"
            alt="Simes Logo" /><img style="cursor:pointer;" class="c-sidebar-brand-minimized"
            src={{asset('front/img/11.png')}} width="60" height="60" alt="CoreUI Logo"  />
</a>
    </div>
    <ul class="c-sidebar-nav">

        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{route('posts.index')}}">Posts</a>
        </li>

        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="threads">Forum</a>
        </li>

        @guest
        @else
        @if (auth()->user()->isAdmin())
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{route('users.index')}}">Users</a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{route('batch.index')}}">Batch</a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{route('publishes.index')}}">Publishes</a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{route('publishescategories.index')}}">Publishes Categories</a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{route('categories.index')}}">Blog Categories</a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{route('semester.index')}}">Semesters</a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{route('subject.index')}}">Subjects</a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{route('channels.index')}}">Channels</a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="categories">Categories</a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{route('tags.index')}}">Tags</a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="threads">Forum</a>
        </li>

        @else

        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{route('users.edit',Auth::user()->id)}}">Update Your Alumni Record</a>
        </li>

        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{route('alumni.index')}}">Alumni</a>
        </li>


        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{route('publishes.index')}}">Publishes</a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="blog">Blog</a>
        </li>

        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{route('users.edit',Auth::user()->id)}}">Update Your Alumni Record</a>
        </li>

        @endif



        @endguest



    </ul>
    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent"
        data-class="c-sidebar-minimized"></button>
</div>
