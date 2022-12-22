@extends('homepage.app')
@section('content')
    <div class="container">
        <div class="columns flex-box-start">
            <div class="row">
                <div class="col-md-4">
                    <div class="column flex-box">
                        <div class="column-inner sidebar shadow">
                            <div class="sidebar flex-box-col">
                                <div class="photo flex-box shadow">
                                    <img src="https://avatars.githubusercontent.com/u/80039063?v=4" alt="">
                                </div>
                                <div class="header-content">
                                    <h2 class="header-name">Taha ÇİÇEK</h2>
                                    <p>Software Developer</p>
                                    <h5 class="header-sub">
                                        <a class="me-2" target="_blank" href="https://instagram.com/tahaacicek"> <i
                                                class="fab  fa-instagram" aria-hidden="true"></i></a>
                                        <a class="me-2" target="_blank" title="no link" href=""><i
                                                class="fab  fa-twitter" aria-hidden="true"></i></a>
                                        <a class="me-2" target="_blank" href="https://github.com/tahacicek"> <i
                                                class="fab fa-github" aria-hidden="true"></i></a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="column flex-box">
                        <div class="column-inner2 terminal shadow">
                            <div class="terminal-bar flex-box">
                                <div class="dots flex-box-start2">
                                    <div class="dot1"></div>
                                    <div class="dot2"></div>
                                    <div class="dot3"></div>
                                </div>
                                <div class="terminal-bar flex-box bar-text">winter.exe</div>
                            </div>
                            <div id="terminal" class="terminal-window"
                                onclick="document.getElementById('dummyKeyboard').focus();">

                                <div class="terminal-output" id="terminalOutput">
                                    <div class="terminal-line break">
                                        <span class="help-msg ">Welcome to winter — Type <span class="code">help</span>
                                            for a
                                            list of commands.</span> <span class="text"></span>
                                    </div>
                                </div>
                                <div class="terminal-line">
                                    <span class="success ">Guest</span> <span class="directory">~</span> <span
                                        class=" user-input" id="userInput"></span><span class="blinking-cursor">_</span>
                                    <input type="text" placeholder="ex" class=" dummy-keyboard " name=""
                                        id="dummyKeyboard">

                                    <div>
                                    </div>
                                </div>
                            </div>
                            <div style="display: none" id="contact-form" class="terminal-window">
                                <div class="row">
                                    <div class="col-md-12">
                                        {{-- button back --}}
                                        <div class="text-center mt-5">
                                            <button onclick="document.getElementById('back');" class="btn-16" id="back" type="button">Back</button>

                                        </div>
                                    </div>

                                        <form>
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                                        aria-describedby="emailHelp">
                                                    <div id="emailHelp" class="form-text">We'll never share your email with
                                                        anyone else.</div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                                    <input type="password" class="form-control" id="exampleInputPassword1">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-3 ">
                                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                                    <textarea class="form-control" name="" id="" rows="3"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="text-center">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>



            <div class="row">
                <div class="col-md-4">
                    <div class="text-center mt-5">
                        <button class="btn-16" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">Everything About Me</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center mt-5">
                        <div class="iconDiv" tooltip="Download My CV" tabindex="0">
                            <div class="iconSVG">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="1">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center mt-5">
                        <button class="btn-16" type="button" data-bs-toggle="offcanvas" data-bs-target="#experiences"
                            aria-controls="offcanvasBottom">All My Experiences
                        </button>
                    </div>
                </div>
            </div>


            <div class="offcanvas offcanvas2 offcanvas-bottom" tabindex="-1" id="offcanvasBottom"
                aria-labelledby="offcanvasBottomLabel">
                <div class="offcanvas-body">
                    <button type="button" class="btn btn-16 col-md-12 mt-4  text-center" data-bs-dismiss="offcanvas"
                        aria-label="Close">
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                </div>
                <div class="offcanvas-header">

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-3">
                                <span class="text-center h4 p-3 mt-4"> <b>About</b></span>
                                <div class="p-3">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur alias ea
                                    excepturi,
                                    possimus a soluta maxime libero quasi reiciendis! Ex, molestias perspiciatis tenetur
                                    sint
                                    fuga cumque sunt error nobis quibusdam. Lorem ipsum dolor sit amet consectetur
                                    adipisicing
                                    elit. Deserunt, repellendus? Accusantium cumque explicabo sequi beatae quos mollitia
                                    modi
                                    reprehenderit dolor! Voluptatibus facilis, quidem sit eius quos amet numquam suscipit
                                    neque.
                                </div>
                            </div>
                            <div class="col-md-1 mt-4">
                                <span class="text-center h4  p-3"> <b>Frontend</b></span>
                                <ul class="mt-2 ul_list">
                                    <li class="mt-3">
                                        <i class="fa-brands fa-2x fa-js"></i>
                                    </li>
                                    <li class="mt-3">
                                        <i class="fa-brands fa-2x fa-bootstrap"></i>
                                    </li>
                                    <li class="mt-3">
                                        <i class="fa-brands fa-2x fa-html5"></i>
                                    </li>
                                    <li class="mt-3">
                                        <i class="fa-brands fa-2x fa-css3-alt"></i>
                                    </li>
                                    <li class="mt-3">
                                        <?xml version="1.0" ?><svg width="38px" viewBox="0 0 35 35"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g id="jquery">
                                                <path
                                                    d="M33.33,26l-.09.21A11.88,11.88,0,0,1,32,28.28,12.27,12.27,0,0,1,25,33a13.07,13.07,0,0,1-1.87.33,17.12,17.12,0,0,1-2.58.08,17.66,17.66,0,0,1-2.63-.32,6.63,6.63,0,0,1-1-.29,16.19,16.19,0,0,1-8.34-6.28,14.37,14.37,0,0,1-2.19-4.91,12.51,12.51,0,0,1-.36-3,10.4,10.4,0,0,1,.94-4.36,10.15,10.15,0,0,1,.69-1.25l.27-.37,1.53-1.94.17-.21a.26.26,0,0,1,0,.18,10.56,10.56,0,0,0-.7,1.95,11.88,11.88,0,0,0-.28,4,13.62,13.62,0,0,0,1.17,4.28,15.32,15.32,0,0,0,3,4.37,16.87,16.87,0,0,0,3.29,2.61,16.51,16.51,0,0,0,4.1,1.75c.46.12.94.2,1.42.28a13.58,13.58,0,0,0,1.43.15c.45,0,.89,0,1.34,0a13.45,13.45,0,0,0,3.51-.49,10.83,10.83,0,0,0,3.93-2,9.68,9.68,0,0,0,1.4-1.39L33.3,26Z" />
                                                <path
                                                    d="M33.42,20.22A8.13,8.13,0,0,1,28,24.3a10.32,10.32,0,0,1-2,.32,12.27,12.27,0,0,1-2,0c-.46,0-.92-.11-1.37-.17l-.19-.05A11.81,11.81,0,0,1,17,21.09a11.37,11.37,0,0,1-2.4-3.91A9.77,9.77,0,0,1,14.15,14,7.73,7.73,0,0,1,15.6,9.56c.33-.46.66-.93,1-1.4.05-.06.09-.12.14-.17s.05,0,.07,0h0l-.11.16a7.86,7.86,0,0,0-.65,2,8.5,8.5,0,0,0-.13,2,9.39,9.39,0,0,0,.84,3.38,11.23,11.23,0,0,0,2.84,3.81,11.71,11.71,0,0,0,4.88,2.59,10.21,10.21,0,0,0,3.11.33A8.84,8.84,0,0,0,31.79,21a7.43,7.43,0,0,0,2.06-1.85l.15-.18S33.58,19.91,33.42,20.22Z" />
                                                <path
                                                    d="M22.64,6.62l-.09.22a4.93,4.93,0,0,0-.36,2.28,6.53,6.53,0,0,0,1.3,3.34,7.16,7.16,0,0,0,4,2.74,7.77,7.77,0,0,0,2.14.28,4.89,4.89,0,0,0,1.47-.21,4,4,0,0,0,1.83-1.12l.17-.17c0,.06,0,.08,0,.1a5.45,5.45,0,0,1-2.74,2.51,5.85,5.85,0,0,1-1.9.39,8.08,8.08,0,0,1-1.9-.14,6,6,0,0,1-1.24-.42,7.36,7.36,0,0,1-3.44-3.13,6,6,0,0,1-.73-2.17,5.19,5.19,0,0,1,.92-3.76l.47-.64.09-.12Z" />
                                                <path d="M16.79,8V8Z" />
                                            </g>
                                        </svg>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-1 mt-4">
                                <span class="text-center h4  p-3"> <b>Backend</b></span>
                                <ul class="mt-2 ul_list">
                                    <li class="mt-3">
                                        <i class="fa-brands fa-2x fa-php"></i>
                                    </li>
                                    <li class="mt-3">
                                        <i class="fa-brands fa-2x fa-laravel"></i>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-1 mt-4">
                                <span class="text-center h4   p-3"> <b>Learning</b></span>
                                <ul class="mt-2 ul_list">
                                    <li class="mt-3">
                                        <i class="fa-brands fa-2x fa-node"></i>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-2 mt-4">
                                <span class="text-center h4 p-3"> <b> Technologies</b></span>
                                <ul class="mt-2 ul_list">
                                    <li class="mt-3">
                                        <i class="fa-brands fa-2x fa-git-alt"></i>
                                    </li>
                                    <li class="mt-3">
                                        <i class="fab fa-2x fa-github" aria-hidden="true"></i>
                                    </li>
                                    <li class="mt-3">
                                        <i class="fa-brands fa-2x fa-wordpress"></i>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4 mt-4">
                                <span class="text-center h4 p-3"> <b> Experiences</b></span>
                                <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere pariatur sed quo,
                                    deleniti non ratione in ea quam exercitationem possimus quis eligendi. Ad, at delectus
                                    fuga modi eaque sed quasi! Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Tempora molestiae similique maxime obcaecati perspiciatis quibusdam. Corporis quam
                                    veritatis nostrum aut voluptatem. Provident necessitatibus aliquid at itaque ipsam esse
                                    tenetur accusantium!
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore doloremque repellat
                                    totam animi a nostrum maxime mollitia quod id exercitationem sapiente, quis, blanditiis
                                    ab harum quae cupiditate, quidem ducimus vitae?
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio atque consequuntur ipsam
                                    possimus est, ratione illum esse quibusdam vero asperiores corrupti repellat, autem
                                    soluta iste numquam dignissimos minima incidunt rerum.</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <div class="offcanvas offcanvas3 offcanvas-bottom" tabindex="-1" id="experiences"
                aria-labelledby="offcanvasBottomLabel">

                <div class="offcanvas-header">

                </div>
                <div class="offcanvas-body">
                    <button type="button" class="btn btn-16 col-md-12 mt-4  text-center" data-bs-dismiss="offcanvas"
                        aria-label="Close">
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card repository mt-2">
                                    <div class="card-header">
                                        <h5><a target="_blank"
                                                href="https://github.com/tahacicek?tab=repositories"><b>Github
                                                    Repositories</b></a> (only public)</h5>

                                        <div class="text-center m-2">
                                            <p> <a href="https://github.com/ryo-ma/github-profile-trophy"><img
                                                        src="https://github-profile-trophy.vercel.app/?username=tahacicek"
                                                        alt="tahacicek" /></a> </p>
                                            <img src="https://github-readme-activity-graph.cyclic.app/graph?username=tahacicek&bg_color=fffff0&color=708090&line=24292e&point=24292e&area=true&hide_border=true"
                                                alt="">

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                @forelse ($data as $item)
                                    <div class="col-md-12 mb-5">
                                        <div class="card repository mt-2">
                                            <div class="card-header">
                                                <h5><b><a target="_blank"
                                                            href="{{ $item->html_url }}">{{ $item->name }}</a></b>
                                                </h5>
                                                <p>{{ $item->description }}</p>
                                            </div>
                                            <div class="card-body">
                                                <i
                                                    class="{{ Str::lower($item->language ?? 'typescript') }} fa-solid me-1 fa-circle"></i>{{ $item->language ?? 'Typescript' }}
                                                <i class="fa me-1 fa-star star"
                                                    aria-hidden="true"></i>{{ $item->stargazers_count }}

                                                <i class="fa-solid me-1 fa-eye"></i> {{ $item->watchers_count }}
                                                ·
                                                Created: {{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}
                                                ·
                                                Last Updated: {{ Carbon\Carbon::parse($item->updated_at)->diffForHumans() }}
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <div class="col-md-12">
                                        <div class="card repository mt-2">
                                            <div class="card-header">
                                                <h5><b></b></h5>
                                            </div>
                                            <div class="card-body">
                                                <p>Oh no
                                                    <i class="fa-solid text-warning fa-smile-beam"></i>
                                                    <br>
                                                    No Repository Found
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endforelse

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
        @section('js')
            <script>
                var offcanvas3 = document.getElementById('experiences')
                offcanvas3.addEventListener('show.bs.offcanvas', function() {
                    document.body.classList.add('offcanvas3-open')
                })
                offcanvas3.addEventListener('hidden.bs.offcanvas', function() {
                    document.body.classList.remove('offcanvas3-open')
                })
            </script>
            <script>
                var offcanvas2 = document.getElementById('contact')
                offcanvas2.addEventListener('show.bs.offcanvas', function() {
                    document.body.classList.add('offcanvas2-open')
                })
                offcanvas2.addEventListener('hidden.bs.offcanvas', function() {
                    document.body.classList.remove('offcanvas2-open')
                })
            </script>
        @endsection
