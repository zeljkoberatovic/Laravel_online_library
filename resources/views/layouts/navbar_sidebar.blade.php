 <!-- Sidebar  -->
 <nav id="sidebar">
     <div class="sidebar-header">
         <h3><img src="{{ Vite::asset('resources/img/logo.svg') }}" class="img-fluid" />
             <div>Biblioteka</div>
         </h3>
     </div>
     <ul class="list-unstyled components">
         <?php $nav_list = config('nav.list.left_sidebar');?>
         @foreach($nav_list as $key => $item)
            <li class="@if( (str_contains(request()->getPathInfo(), $item['url']) && $item['url'] != '/')   ) active @endif">
                <a href="{{ $item['url'] }}" class="dashboard">
                    <i class='material-symbols-outlined'>{!! $item['icon'] !!}</i>
                    <span>{{ $item['title'] }}</span></a>
            </li>
         @endforeach
<!--
         <li class="@if( request()->getPathInfo() == '/' ) active @endif">
                <a href="{{ url('/') }}" class="dashboard"><i class="material-symbols-outlined">team_dashboard</i><span>Kontrolna tabla</span></a>
            </li>

         <li class="@if( request()->getPathInfo() == '/autori' ) active @endif">
             <a href="{{ url('/autori') }}" class=""><i class="material-symbols-outlined">account_box</i><span>Autori</span></a>
         </li>

         <li class="@if( request()->getPathInfo() == '/knjige' ) active @endif">
             <a href="{{ url('/knjige') }}" class=""><i class="material-symbols-outlined">menu_book</i><span>Knjige</span></a>
         </li>

         <li class="@if( request()->getPathInfo() == '/izdavanje-knjiga' ) active @endif">
             <a href="{{ url('/izdavanje-knjiga') }}" class=""><i class="material-symbols-outlined">currency_exchange</i><span>Izdavanje knjiga</span></a>
         </li>

         <li class="">
             <a href="#"><i class="material-symbols-outlined">library_books</i><span>Kalendar</span></a>
         </li>

         <li class="@if( request()->getPathInfo() == '/clanovi' ) active @endif">
             <a href="{{ url('/clanovi') }}" class=""><i class="material-symbols-outlined">groups</i><span>Članovi</span></a>
         </li>

         <li class="@if( request()->getPathInfo() == '/recycle-bin' ) active @endif">
             <a href="{{ url('/recycle-bin') }}" class=""><i class="material-symbols-outlined">delete</i><span>Korpa za otpatke</span></a>
         </li>
-->
         <!-- 
                <li class="dropdown">
                    <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
					<i class="material-symbols-outlined">apps</i><span>Izdavanje knjiga</span></a>
                    <ul class="collapse list-unstyled menu" id="pageSubmenu2">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>
				-->

     </ul>
 </nav>

