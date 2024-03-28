<div class="inblock sm:hidden" style="position: relative;width: 50px;height: 50px;">
    <input type="checkbox" id="active">
    <label for="active"  class="menu-btn flex justify-center items-center bg-gray-200 dark:bg-slate-400  ">
      <div style="width: 30px;height:33px;margin:auto;background-image:url({{asset('/imgs/burg.png')}});
      background-position:center;background-size:cover;"></div>
    </label>
    
    @if (App::getLocale() == 'ar')
      <div class="wrappernavar bg-gray-200 border-black dark:bg-gray-900" >
    @else
      <div class="wrappernav bg-gray-200 border-black dark:bg-gray-900" >
    @endif
  <ul id="sub-mob-ul">
  <li><a href="{{url('/')}}">{{__('website.homepage')}}</a></li>
  <li><a href="">{{__('website.contactus')}}</a></li>
  
  </ul>
  </div>
</div>