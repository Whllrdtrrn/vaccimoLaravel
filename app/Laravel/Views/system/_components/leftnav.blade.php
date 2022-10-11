<div class="be-left-sidebar"style="background-color:white;">
    <div class="left-sidebar-wrapper"><a href="#" class="left-sidebar-toggle">{{env('APP_NAME',"Vaccimo")}}</a>
        <div class="left-sidebar-spacer">
            <div class="left-sidebar-scroll">
                <div class="left-sidebar-content">
                    <ul class="sidebar-elements">
                       
                       

                    <li class=""><a href="{{route('system.dashboard.index')}}"><i class=""></i><span>Dashboard</span></a>
                           
                           </li>
                        
                   
                        <li class="divider"style="color:black">Masterfile</li>
                        
                 
                        <!-- <li class="parent"><a href="#"><i class=""></i><span>Product</span></a>
                            <ul class="sub-menu">
                                <li><a href="{{route('system.product.index')}}">All records</a> </li>
                                <li><a href="{{route('system.product.create')}}">Create New</a> </li>
                            </ul>
                        </li> -->
                 
                        <li class=""><a href="{{route('system.user_management.index')}}"><i class=""></i><span>User Management</span></a>
                           
                           </li>
    
                           <li class=""><a href="{{route('system.side_effect.index')}}"><i class=""></i><span>Side Effect</span></a>
                           
                           </li>
                           <li class=""><a href="{{route('system.information.index')}}"><i class=""></i><span>Information Collection</span></a>
                           
                           </li>
                           
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>