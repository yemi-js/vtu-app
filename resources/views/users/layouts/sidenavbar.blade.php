 <div id="layoutSidenav">
     <div id="layoutSidenav_nav">
         <nav class="sidenav shadow-right sidenav-dark bg-dark">
             <div class="sidenav-menu">
                 <div class="nav accordion" id="accordionSidenav">
                     <!-- Sidenav Menu Heading (Account)-->
                     <!-- * * Note: * * Visible only on and above the sm breakpoint-->
                     <!-- Sidenav Menu Heading (Core)-->
                     <div class="sidenav-menu-heading">Main</div>
                     <!-- Sidenav Accordion (Dashboard)-->
                     <a class="nav-link collapsed" href="{{ route('dashboard') }}">
                         <div class="nav-link-icon"><i data-feather="activity" class="text-warning"></i></div>
                         Dashboard

                     </a>

                     <!-- Sidenav Heading (Custom)-->
                     <div class="sidenav-menu-heading">Purchase </div>
                     <!-- Sidenav Accordion (Pages)-->
                     <a class="nav-link collapsed" href="{{ route('buy-airtime') }}">
                         <div class="nav-link-icon"><i data-feather="users" class="text-warning"></i></div>
                         Buy Airtime

                     </a>
                     <!-- Sidenav Accordion (Applications)-->
                     <a class="nav-link collapsed" href="{{ route('buy-data') }}" aria-expanded="false"
                         aria-controls="collapseApps">
                         <div class="nav-link-icon"><i data-feather="dollar-sign" class="text-warning"></i></div>
                         Buy Data
                     </a>

                     <!-- Sidenav Accordion (Flows)-->
                     <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
                         data-bs-target="#collapseFlows" aria-expanded="false" aria-controls="collapseFlows">
                         <div class="nav-link-icon"><i data-feather="repeat" class="text-warning"></i></div>
                         Electric Bill
                     </a>
                     <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
                         data-bs-target="#collapseFlows" aria-expanded="false" aria-controls="collapseFlows">
                         <div class="nav-link-icon"><i data-feather="repeat" class="text-warning"></i></div>
                         Cable TV Payments
                     </a>

                     <!-- Sidenav Heading (UI Toolkit)-->
                     <div class="sidenav-menu-heading">TRANSACTIONS</div>
                     <a class="nav-link collapsed" href="{{ route('transactions') }}"  aria-expanded="false" aria-controls="collapsePages">
                         <div class="nav-link-icon"><i data-feather="layout" class="text-warning"></i></div>
                         Transaction History

                     </a>
                     <!-- Sidenav Accordion (Applications)-->
                     <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
                         data-bs-target="#collapseApps" aria-expanded="false" aria-controls="collapseApps">
                         <div class="nav-link-icon"><i data-feather="dollar-sign" class="text-warning"></i></div>
                         Fund User Wallet
                     </a>

                     <!-- Sidenav Accordion (Flows)-->
                     <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
                         data-bs-target="#collapseFlows" aria-expanded="false" aria-controls="collapseFlows">
                         <div class="nav-link-icon"><i data-feather="repeat" class="text-warning"></i></div>
                         Referral Payout
                     </a>


                     <!-- Sidenav Heading (Addons)-->
                     <div class="sidenav-menu-heading">Settings</div>
                     <!-- Sidenav Link (Charts)-->
                     <a class="nav-link" href="charts.html">
                         <div class="nav-link-icon"><i data-feather="user" class="text-warning"></i></div>
                         Profile
                     </a>



                        <a class="nav-link-collapsed"
                             href="{{ route('logout') }}"
                             onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <div class="nav-link-icon"><i data-feather="log-out" class="text-danger"></i></div>
                             Logout
                         </a>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                         {{ csrf_field() }}
                     </form>


                 </div>
             </div>
             <!-- Sidenav Footer-->
             <div class="sidenav-footer">
                 <div class="sidenav-footer-content">
                     <div class="sidenav-footer-subtitle">Logged in as:</div>
                     <div class="sidenav-footer-title">

                         @auth()
                             {{ Auth::user()->name }}
                         @endauth

                     </div>
                 </div>
             </div>
         </nav>
     </div>
