

	<div class="header-bot">


        <nav class="relative flex flex-wrap items-center justify-between px-2 py-1 navbar-expand-lg bg-teal-500 mb-3">
            <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
              <div class="lg:flex flex-grow items-center" id="example-navbar-warning">
                <ul class="flex flex-col lg:flex-row list-none ml-auto items-center">
                    @foreach($categories as $category)
                    <li class="nav-item mr-5">
                      <a class="px-5 py-2 flex items-center text-xs font-bold leading-snug text-white hover:opacity-75" href="{{ route('categoryPage', $category->id) }}">
                        {{ $category->الاسم }}
                      </a>
                    </li>
                    @endforeach
                </ul>
              </div>
            </div>
          </nav>









        <div class="header-bot_inner_wthreeinfo_header_mid">
			<!-- header-bot-->
			<div class="col-md-4 logo_agile">
				<h1>
					<a href="{{ route('home') }}">
						<img src="{{ asset('frontend/images/logo.png') }}" alt="logo" width="80%">
					</a>
				</h1>
			</div>
			<!-- //header-bot -->

			<div class="col-md-8 header" style="direction: rtl;" >
				<!-- header lists -->
                {{-- <div class="col-md-3 "> --}}
				<ul>
                    <li>
                        <div class="dropdown"  style="width:100%;margin-right: 3rem">
                            @if(auth()->check())
                            <button class="dropbtn" >حسابك</button>
                            <div class="dropdown-content" style="padding: 20px;" >

                                <a class="btn btn-primary" href="{{ route('profile', Auth::id())}}">
                                    <span class="fa fa-user" aria-hidden="true"></span>الصفحة الشخصية
                                </a><br>

                                <a class="btn btn-primary" href="{{ route('personal-products', Auth::id()) }}">
                                    منتجاتك
                                </a><br>

                                @role('admin|superAdmin')
                                <a class="btn btn-success" href="{{ route('admin.dashboard') }}">
                                    صفحة الأدمن
                                </a><br>
                                @endrole

                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" id="logout-btn">
                                        <span class="fa fa-unlock-alt" aria-hidden="true"></span> تسجيل خروج  </a>
                                    </button>
                                </form>

                            </div>

                            @else
                            <button class="dropbtn" > سجّل الدخول</button>
                            <div class="dropdown-content" style="padding: 20px;">
                                <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#myModal1">
                                    تسجيل دخول <span class="fa fa-unlock-alt" aria-hidden="true"></span>
                                </a><br>
                                <small>لا تمتلك حساب؟</small>
                                <a href="#" data-toggle="modal" data-target="#myModal2">
                                    سجّل الآن <span class="fa fa-pencil-square-o" aria-hidden="true"></span>
                                </a>
                            </div>
                            @endif
                        <!-- //login -->
                    </li>
				</ul>
                {{-- </div> --}}


                <!-- Search box-->

                <div class="search col-md-5" >
                    <form action="#" method="GET" class="search-form">
                        <input  type="text" name="search" placeholder="ابحث..." required>
                        <button type="submit" class="btn btn-default">
                            <span class="fa fa-search" aria-hidden="true"> </span>
                        </button>
                    </form>
                </div>
            </div>

			<div class="clearfix"></div>

		</div>
	</div>

	<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body modal-body-sub_agile">
					<div class="main-mailposi">
						<span class="fa fa-envelope-o" aria-hidden="true"></span>
					</div>
					<div class="modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">تسجيل دخول </h3>
						<p style="text-align: right;">
							سجّل الدخول الآن ، لنبدأ للتسوق . ليس لديك حساب؟
							<a href="#" data-toggle="modal" data-target="#myModal2">
								تسجيل جديد </a>
						</p>
						<form action="{{ route('login') }}" method="post"  autocomplete="off">
							@csrf
							<div class="styled-input agile-styled-input-top">
								<input style="text-align: right;" type="text" placeholder="رقم الهاتف" name="phone_number" required="">
							</div>
							<div class="styled-input">
								<input style="text-align: right;" type="password" placeholder="كلمة السر" name="password" required="">
							</div>
							<div style="display: flex; justify-content: flex-end;">
								<input type="submit" value="تسجيل دخول ">
							</div>
						</form>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<!-- //Modal content-->
		</div>
	</div>
	<!-- //Modal1 -->
	<!-- //signin Model -->
	<!-- signup Model -->
	<!-- Modal2 -->
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body modal-body-sub_agile">
					<div class="main-mailposi">
						<span class="fa fa-envelope-o" aria-hidden="true"></span>
					</div>
					<div class="modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">تسجيل جديد </h3>
						<h4 style="text-align: right;">
							دعنا ننشئ حسابك
						</h4><br>
						<form action="{{ route('register') }}" method="post" autocomplete="off">
							@csrf
							<div class="styled-input">
								<input style="text-align: right;" type="text" placeholder="الاسم" name="name" required>
							</div>
							<div class="styled-input">
								<input style="text-align: right;" type="email" placeholder="البريد الالكتروني" name="email" required>
							</div>
                            <div class="styled-input">
								<input style="text-align: right;" type="text" placeholder="رقم الهاتف" name="phone_number" required>
							</div>
                            <div class="styled-input">
								<input style="text-align: right;" type="text" placeholder="العنوان" name="address" required>
							</div>
							<div class="styled-input">
								<input style="text-align: right;" type="password" placeholder="كلمةالسر" name="password" id="password1" required>
							</div>
                            <div class="styled-input">
                                <input style="text-align: right;" type="password" placeholder="تأكيد كلمة السر" name="password_confirmation" required>
                            </div>

							<div style="display: flex; justify-content: flex-end;">
								<input type="submit" value="تسجيل جديد ">
							</div>
						</form>
						<p style="text-align: right;">
							<a href="{{ route('aboutUs') }}">
							بالضغط على التسجيل أنت توافق على الشروط والأحكام
                            </a>
						</p>
					</div>
				</div>
			</div>
			<!-- //Modal content-->
		</div>
	</div>
	<!-- //Modal2 -->
	<!-- //signup Model -->
	<!-- //header-bot -->
	<!-- navigation -->
	<div class="ban-top">
		<div class="container">
			<div class="top_nav_left">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav menu__list">
								<li class="dropdown">
									<a href="{{ asset('frontend/') }}#" class="dropdown-toggle nav-stylehead" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">جميع الأقسام
										<span class="caret"></span>
									</a>
									<ul class="dropdown-menu multi-column columns-3">
										<div class="agile_inner_drop_nav_info">
                                            @foreach ($categories->chunk(10) as $chunk)
											<div class="col-sm-6 multi-gd-img">
                                                <ul class="multi-column-dropdown">
                                                @foreach($chunk as $category)
                                                <li>
                                                    <a href="{{ route('categoryPage', $category->id) }}">{{ $category->الاسم }}</a>
                                                </li>
                                                @endforeach
                                                </ul>
                                            </div>
                                            @endforeach
											<div class="clearfix"></div>
										</div>
									</ul>
								</li>
                                <?php $segment = Request::segment(1) ?>
								<li class="@if($segment=='adding') active @endif">
									<a class="nav-stylehead " href="{{ route('get_add') }}">اضف منتجات</a>
								</li>
								<li class="@if($segment=='contact') active @endif">
									<a class="nav-stylehead " href="{{ route('contactPage') }}">تواصل معنا</a>
								</li>
								<li class="@if($segment=='about-us') active @endif">
									<a class="nav-stylehead " href="{{ route('aboutUs') }}">من نحن </a>
								</li>
								<li class="@if(!$segment) active @endif">
									<a class="nav-stylehead " href="{{ route('home') }}">الرئيسية
										<span class="sr-only">(current)</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

@section('scripts')

@endsection
	<!-- //navigation -->
