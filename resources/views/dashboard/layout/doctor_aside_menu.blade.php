<!--begin::Menu-->
<div
    class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500"
    id="#kt_aside_menu" data-kt-menu="true">
    <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
        <div class="menu-item">
            <div class="menu-content pb-2">
                <span class="text-muted text-uppercase fs-8 ls-1" >DASHBOARD</span>
            </div>
        </div>
        <div class="menu-sub menu-sub-accordion show">
            <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
											<span class="menu-title aside-home-title" >
											<!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/kt-products/docs/metronic/html/releases/2023-07-21-074234/core/html/src/media/icons/duotune/general/gen001.svg-->
                                                    <span class="svg-icon svg-icon-muted svg-icon-2">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11 2.375L2 9.575V20.575C2 21.175 2.4 21.575 3 21.575H9C9.6 21.575 10 21.175 10 20.575V14.575C10 13.975 10.4 13.575 11 13.575H13C13.6 13.575 14 13.975 14 14.575V20.575C14 21.175 14.4 21.575 15 21.575H21C21.6 21.575 22 21.175 22 20.575V9.575L13 2.375C12.4 1.875 11.6 1.875 11 2.375Z" fill="currentColor"/>
                                                    </svg>
                                                    </span>
                                                <!--end::Svg Icon-->
												<a  href="{{route(getIndexRouteByUserRole())}}"
                                                    class="menu-title text-muted mx-2">Home</a>
											</span>

            </div>
        </div>
    </div>

    <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
        <div class="menu-item">
            <div class="menu-content pb-2">
                <span class="text-muted  text-uppercase fs-8 ls-1">User Management</span>
            </div>
        </div>
        <div class="menu-sub menu-sub-accordion show">
            <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
											<span class="menu-link">
													<span class="svg-icon svg-icon-2 ">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none">
													<path opacity="0.3"
                                                          d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z"
                                                          fill="currentColor"/>
													<path
                                                            d="M14.854 11.321C14.7568 11.2282 14.6388 11.1818 14.4998 11.1818H14.3333V10.2272C14.3333 9.61741 14.1041 9.09378 13.6458 8.65628C13.1875 8.21876 12.639 8 12 8C11.361 8 10.8124 8.21876 10.3541 8.65626C9.89574 9.09378 9.66663 9.61739 9.66663 10.2272V11.1818H9.49999C9.36115 11.1818 9.24306 11.2282 9.14583 11.321C9.0486 11.4138 9 11.5265 9 11.6591V14.5227C9 14.6553 9.04862 14.768 9.14583 14.8609C9.24306 14.9536 9.36115 15 9.49999 15H14.5C14.6389 15 14.7569 14.9536 14.8542 14.8609C14.9513 14.768 15 14.6553 15 14.5227V11.6591C15.0001 11.5265 14.9513 11.4138 14.854 11.321ZM13.3333 11.1818H10.6666V10.2272C10.6666 9.87594 10.7969 9.57597 11.0573 9.32743C11.3177 9.07886 11.6319 8.9546 12 8.9546C12.3681 8.9546 12.6823 9.07884 12.9427 9.32743C13.2031 9.57595 13.3333 9.87594 13.3333 10.2272V11.1818Z"
                                                            fill="currentColor"/>
												</svg>
											</span>
												<span class="menu-title mx-2">Appointments</span>
												<span class="menu-arrow"></span>
											</span>
                <div class="menu-sub menu-sub-accordion">
                    <div class="menu-item">
                        <a class="menu-link" href="{{route('doctor.appointments.index')}}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                            <span class="menu-title">All</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="{{route('doctor.appointments.create')}}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                            <span class="menu-title">Add</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
<!--end::Menu-->