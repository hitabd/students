<nav class="pcoded-navbar">
	<div class="nav-list">
		<div class="pcoded-inner-navbar main-menu">
			<ul class="pcoded-item pcoded-left-item">
				<li class="pcoded-hasmenu  ">
					<a href="javascript:void(0)" class="waves-effect waves-dark">
						<span class="pcoded-micon"><i class="feather icon-home"></i></span>
						<span class="pcoded-mtext">{{ __('Student') }}</span>
					</a>
					<ul class="pcoded-submenu">
						<li class="">
							<a href="{{ route('student.index') }}" class="waves-effect waves-dark">
								<span class="pcoded-mtext"> {{ __('Student') }}</span>
							</a>
						</li>
						<li class="">
							<a href="{{ route('student.create') }}" class="waves-effect waves-dark">
								<span class="pcoded-mtext">{{ __('Add Student') }}</span>
							</a>
						</li>
					</ul>
				</li>
			</ul>

		</div>
	</div>
</nav>
