<?php 
/*
Plugin Name: Responsive adminbar
Plugin URI: http://blog.verha.net/responsive-adminbar.html
Description: For greater ease of use WP when you change the width of the browser plug-in replaces the text links adminbar the icons.
Version: 0.1.0
Author: Vlasov Evgeny
Author URI: http://verha.net/
*/

function ev_responsive_style_adminbar() {
    if ( is_user_logged_in() ) { 
    echo '<style>
    @media (max-width: 900px) {
    #wpadminbar {
        min-width: 600px;
    }
    #wp-admin-bar-new-content .ab-label, 
    #wp-admin-bar-search   {
        display: none;
    }
    #wp-admin-bar-my-account>.ab-item, 
    #wp-admin-bar-my-sites>.ab-item, 
    #wp-admin-bar-site-name>.ab-item, 
    #wp-admin-bar-edit>.ab-item {
        font-size: 0;
    }
    #wp-admin-bar-edit>.ab-item, 
    #wp-admin-bar-my-sites>.ab-item, 
    #wp-admin-bar-site-name>.ab-item {
        padding: 0 10px !important;
        width: 20px;
    }
    #wp-admin-bar-edit .ab-item {
        background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyBpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBXaW5kb3dzIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjg2MjdCQTg1RUFDMjExRTE4M0U3QTZFNTdBRTg3RjI3IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjg2MjdCQTg2RUFDMjExRTE4M0U3QTZFNTdBRTg3RjI3Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6ODYyN0JBODNFQUMyMTFFMTgzRTdBNkU1N0FFODdGMjciIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6ODYyN0JBODRFQUMyMTFFMTgzRTdBNkU1N0FFODdGMjciLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz42/l9uAAABh0lEQVR42qSTPUvDUBSG89UmaQqFdpBiP3TvrkvbycHdWRAHHUQc8zfUVQj4C1xEcdAqOrs6NUJT6CD9IEMlaRrfozchjWmWBm5uDjnPe957TsL7vs+tckl0MwxjaQIVyOfz66qqHgiCsDabze4Hg8HtaDTidF3/E0iDJUmq5HK5O+wNimVZPtE07XQymVyGDpbBoihWi8XiK/baeDzeB/wOF+elUukCzz2k3QgpcB2JzwT/VpKkQ8uyPlzXPaYYrnZpF5bYrjJ4k2LWh3a5XH6EQIvneW4+n3/9OwKDN2C7Qw6iEwLA4exNPDYh0kUTrxYEGFwD/BSHoxeE+pjCznA4NEOBCPwGuJIEk23P8yw0s41RdikOe6AoyhbgFwb7wcs4DNsLcChQKBSOyLbjOHvT6bSOdZ0At+JwKICiLtnOZDLUvB4Sz+i4DO4x2IzDSR9SI5vN9iG2jWQhUvkzCQ4F8HXJLO6wngSV22lw1MED1jeWGEzVtm0D8zYhnvo38qv+zj8CDACb9uTNYwd8BgAAAABJRU5ErkJggg==) !important;
        background-repeat: no-repeat !important;
        background-position: center center !important;
    }
    #wp-admin-bar-my-sites>.ab-item {
        background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyBpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBXaW5kb3dzIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkZFQTVGREVDRUFDNTExRTE4RjJEODg0RTFGQjk2QTE2IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkZFQTVGREVERUFDNTExRTE4RjJEODg0RTFGQjk2QTE2Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6RkVBNUZERUFFQUM1MTFFMThGMkQ4ODRFMUZCOTZBMTYiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6RkVBNUZERUJFQUM1MTFFMThGMkQ4ODRFMUZCOTZBMTYiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz6HXtCCAAABEUlEQVR42mL8//8/AyWAiYFCwAIitm3bxvD3719mJiamVEZGRiegq74A8WogezsQM/z7988ESMcDsSRQ/DyQPxWo9oO3tzfEACBgAwqsAyrwBnFAmoA4EcisA+IbQLnlQJoZKhcM5McAmU5A/BzsBaCJMTDNaKAJiFfANMMAUK0GkKqBhwFQwJbUcALqMUGWfEtG+H2AGwD0wjpSdQP1bIQbAAyUY0CKFENuAb2wADkMQFQaEN8mQvNXIA4D6vmGHkBvgWnBDRjPV/FoBqnxAdIXcYXwA6DfHICG7MHmbKjcAUJR9Aao0B2osA8mAGRvANpsCWRewZqUsQfyv2KgP68AsRyQ3QgNJ8z0MOC5ESDAANX4cQAd3wXUAAAAAElFTkSuQmCC) !important;
        background-repeat: no-repeat !important;
        background-position: center center !important;
    }
    #wp-admin-bar-my-sites>.ab-item:hover {
        background-color: #333 !important;
    } 
    #wpadminbar .ab-top-menu > li#wp-admin-bar-my-sites.menupop.hover > .ab-item {
        background-color: #fff !important;
    }
    #wp-admin-bar-site-name>.ab-item {
        background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyBpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBXaW5kb3dzIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjhCNDM3NTkxRUFDOTExRTFCNkRBRUZEMUI3NDNBRTk5IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjhCNDM3NTkyRUFDOTExRTFCNkRBRUZEMUI3NDNBRTk5Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6OEI0Mzc1OEZFQUM5MTFFMUI2REFFRkQxQjc0M0FFOTkiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6OEI0Mzc1OTBFQUM5MTFFMUI2REFFRkQxQjc0M0FFOTkiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz6RPlNhAAABQ0lEQVR42qSTwUrDQBCGs5stUqGUQhXsQcQnEETBQ0Evok9SwWexIHjRqyB4EMRSg1Bv6puIeBAv4qEhid/AbElDopUu/Mzuzvwz/04mJsuyYJ7loiiqdKZpeoCpWWsHVYVc2WWSJELedc7dcrRxHB+S5BHsa8gL+JKNrSjeDcPwDrsgCtjfGGOO2T8o1koVaOUdKg84Nvw95CbmTEKAvCX1vikFBG4jc8i2WaEsVBtPJZDKvHOTBEMStP5ovCV+HaVScKJgA+I9tj3Dl7MQL7FbgXa4C/kZLM/67YldAk9w97C2w90pGP9jfqQHfbgrIueaw0m+MbrewRHogbeyBHCvJEGgn8wUgj7BObgAHwWfxDbyTSx9qs6J+WXgJg4JWiz48ud6wVf3iv0kfgM/un696tTJGoHVnG+snMDM+zv/CDAAxxFXqA72YgEAAAAASUVORK5CYII=) !important;
        background-repeat: no-repeat !important;
        background-position: center center !important;
    }
    #wp-admin-bar-site-name>.ab-item:hover, 
    #wpadminbar .ab-top-menu > li#wp-admin-bar-site-name.menupop.hover > .ab-item {
        background-color: #fff;
    }
}
</style>'; 
} else {}
}
 
add_action( 'admin_head', 'ev_responsive_style_adminbar' ); 
add_action( 'wp_head', 'ev_responsive_style_adminbar' ); 
?>