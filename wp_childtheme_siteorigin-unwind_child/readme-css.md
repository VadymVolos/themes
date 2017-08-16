wp_childtheme_siteorigin-unwind_child  
readme-css.md  


Нет времени дочернюю делать. Ниже стили, которые нужны чтоб тема выглядела лучше.

В теме чтоб работал слайдер из постов по умлочанию плагин джетпак нужен, но он весит много, регистрации требует, и муссора после него много.

Поэтому есть другой способ как слайдер включить, в тему интегрирован Page Builder by SiteOrigin, его можно включить для главной, в нем нужно добавить виджет списка постов, и в настроках этого виджета выбрать отображение постов в виде слайдера, в итоге получится такой же слайдер как в демо версии темы, плюс еще есть бонус в этом виджете в настройках можно выбрать категории с которых выводить посты в слайдер.  

.blog-layout-grid .archive-entry .entry-title {
    font-size: 1.1em;
    font-weight: bold;
    line-height: 1.75;
}  

/* 404page */
.error-404 .widget_recent_entries,
.error-404 .widget_categories,
.error-404 .widget_archive {
display:none;
}  

/* высота топ меню */
.main-navigation {
    line-height: 1.0;
}  

/* если слайдер добавить без джетпака, а с помощью пейдж билдера, там есть виджет записей, и там в настройках можно включить отображать пості как слайдер */  
.1flex-direction-nav {
    display: none;
}  

.entry-content .panel-layout .panel-grid .widget .featured-posts-slider ul {  
    padding-left: 0px;
}  
.entry-content .panel-layout .panel-grid .widget .featured-posts-slider ul li {
    list-style: none;
}  

.slides, .slides > li, .flex-control-nav, .flex-direction-nav {
    list-style: none !important;
}  

.entry-content .panel-layout .panel-grid .widget ul {
    padding-left: 0px;
}  

.flex-control-nav {
    bottom: 8px;
}  

