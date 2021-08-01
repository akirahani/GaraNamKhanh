<style>
   #task-bar{
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    z-index: 98;
    background-color: rgba(249,249,249,.98);
    box-shadow: 0 -5px 10px 0 rgb(0 0 0 / 6%);
    min-height: calc(60px + (env(safe-area-inset-bottom))*1.1);
    display: flex;
    text-align: center;
    transition: all 350ms ease;
}
    #task-bar a{
            color: #1f1f1f;
            padding-top: 12px;
            position: relative;
            flex: 1 1 auto;
        }
    #task-bar a i  {
        font-size: 50px;
        position: relative;
        z-index: 2
    }
    #task-bar a span {
        padding:10px;
        z-index: 2;
        display: block;
        font-size: 30px;
        font-weight: 500;
        margin-top: -6px;
        opacity: 1;
        font-family: roboto,sans-serif!important;
    }
</style>
<div id="task-bar" class="task-bar-1" style="transform: translateX(0px);">

    <!-- <a href="index-components.html"><i class="fa fa-star"></i><span>Khách thân</span></a> -->
    <!-- <a href="index-pages.html"><i class="fa fa-heart"></i><span>Yêu thích</span></a> -->
    <a href="index-search.html"><i class="fa fa-search"></i><span>Tìm kiếm</span></a>
    <a href="index.html" class="active-nav"><i class="fa fa-home"></i><span>Trang chủ</span></a>

    <a href="#" data-menu="menu-settings"><i class="fas fa-bell"></i><span>Thông báo</span></a>
</div>
