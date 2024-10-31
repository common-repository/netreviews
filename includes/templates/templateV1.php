<?php

$errorMessage = __('An error has occured.', 'av');
$successMessage = __('Thank you, your vote will be published soon', 'av');

$html = '<script type="text/javascript">
var avHelpfulIdwebsite = "' .  $idWebsite . '";
var avHelpfulURL = "' . $avHelpfulURL . '";
var avhelpfulExec = false;
var avInitialFingerPrint = "";
var avHelpfulCookie = {};
var avHelpfulErrorMessage = "' . $errorMessage . '";
var avHelpfulSuccessMessage = "' . $successMessage . '";
</script>';

$html .= '<script type="text/javascript" src="' . plugins_url(null, '') . '/netreviews/includes/js/carousel.js"></script>';
$html .= '<script type="text/javascript" src="' . plugins_url(null, '') . '/netreviews/includes/js/fingerprint2.min.js"></script>';
$html .= '<script type="text/javascript" src="' . plugins_url(null, '') . '/netreviews/includes/js/netreviewsHelpful.js"></script>';
$html .= '<script type="text/javascript" src="' . plugins_url(null, '') . '/netreviews/includes/js/carousel.js"></script>';
$html .= '<script type="text/javascript" src="' . plugins_url(null, '') . '/netreviews/includes/js/av_product_tab.js"></script>';
$html .= '<script src="https://kit.fontawesome.com/fd565dd76c.js" crossorigin="anonymous"></script>';
$html .= '<!-- hiddens -->';
$html .= '<input type="hidden" id="rateSelected" value=""/>';
$html .= '<input type="hidden" id="maxPage1" value="' . $maxPage1 . '"/>';
$html .= '<input type="hidden" id="maxPage2" value="' . $maxPage2 . '"/>';
$html .= '<input type="hidden" id="maxPage3" value="' . $maxPage3 . '"/>';
$html .= '<input type="hidden" id="maxPage4" value="' . $maxPage4 . '"/>';
$html .= '<input type="hidden" id="maxPage5" value="' . $maxPage5 . '"/>';
$html .= '<input type="hidden" id="maxPageGlobal" value="' . $maxPages . '">';
$html .= '<input type="hidden" id="av_id_product" value="' . $id_product . '"/>';
$html .= '<input type="hidden" id="avisVarifiesAjaxUrl" value="' . $avisAjaxUrl . '"/>';
$html .= '<input type="hidden" id="wpml_Lang" value="' . $my_current_lang . '"/>';

$html .= '<div id="netreviews_reviews_tab" class="netreviews_tpl_v1 ';
if ($responsive == "1") {
    $html .= 'nrResponsive';
}
$html .= '"><div id="netreviews_rating_section">';
$html .= '<div class="netreviews_rating_header">';
$html .= '<img src="' . $pluginImagesURL . $logoFile . '" alt="' . __('Verified Reviews', 'av') . '">';
$html .= '<div>';
$html .= '<a class="netreviews_certification" href="' . $hrefcertificat . '" target="_blank">' . __('Show the Certificate of Trust', 'av') . '</a>';
$html .= '<label id="netreviews_informations_label">' . __('Reviews subject to control', 'av') . ' <div class="nr-icon nr-info"></div></label>';
$html .= '<span id="netreviews_informations">';
$html .= '<div class="nr-icon nr-exit"></div>';
$html .= '<ul>';
$html .= '<li>' . __("For further information on the nature of the review controls, as well as the possibility of contacting the author of the review please consult our", 'av');
$html .= '<a href="https://www.netreviews.com/consumers/' . __('en/transparency-charter/', 'av') . '" target="_blank">' . __("Transparency Charter", 'av') . '</a>';
$html .= '</li>';
$html .= '<li>' . __("No inducements have been provided for these reviews", 'av') . '</li>';
$html .= '<li>' . __("Reviews are published and kept for a period of five years", 'av') . '</li>';
$html .= '<li>' . __("Reviews can not be modified: If a customer wishes to modify their review then they can do so by contacting Verified Reviews directly to remove the existing review and publish an amended one", 'av') . '</li>';
$html .= '<li>' . __("The reasons for deletion of reviews are available", 'av');
$html .= '<a href="https://www.' . __('verified-reviews.com', 'av') . '/index.php?page=mod_conditions_utilisation#Rejet_de_lavis_de_consommateur" target="_blank">' . __("here", 'av') . '</a>.';
$html .= '</li>';
$html .= '</ul>';
$html .= '</span>';
$html .= '</div>';
$html .= '</div>';
$html .= '<div class="netreviews_rating_content">';
$html .= '<div class="netreviews_global_rating">';
$html .= '<p class="netreviews_note_generale">';
$html .=  $getNote . '<span>&nbsp;/5</span>';
$html .= '</p>';
$html .= '<div class="netreviews_bg_stars_big">';
$html .= ntav_addStars($getNote);
$html .= '</div>';
$html .= '<p class="netreviews_subtitle">';
$html .= __('Based on', 'av') . ' ' . $countReviews . ' ' .  __('customer(s) reviews', 'av');
$html .= '</p>';
$html .= '</div>';
$html .= '<div class="netreviews_global_rating_details">';
$html .= '<ul class="netreviews_rates_list" style="color: #' . $starsColour . ' !important">';
$html .= "<li class='netreviews_rate_list_item' onclick='refreshReviewsWithFilter(1)'>";
$html .= '<span>1</span>';
$html .= '<div class="nr-icon nr-star gold"></div>';
$html .= '<div class="netreviews_rate_graph">';
$html .= "<span class='netreviews_rate_percent' onclick='refreshReviewsWithFilter(1)' style='height:" . $ratio1 . "px; background:#" . $starsColour . " !important'>";
$html .= '<span class="netreviews_rate_total">' . $count1 . '</span>';
$html .= '</span>';
$html .= '</div>';
$html .= '</li>';
$html .= "<li class='netreviews_rate_list_item' onclick='refreshReviewsWithFilter(2)'>";
$html .= '<span>2</span>';
$html .= '<div class="nr-icon nr-star gold"></div>';
$html .= '<div class="netreviews_rate_graph">';
$html .= "<span class='netreviews_rate_percent' onclick='refreshReviewsWithFilter(2)' style='height:" . $ratio2 . "px; background:#" . $starsColour . " !important'>";
$html .= '<span class="netreviews_rate_total">' . $count2 . '</span>';
$html .= '</span>';
$html .= '</div>';
$html .= '</li>';
$html .= "<li class='netreviews_rate_list_item' onclick='refreshReviewsWithFilter(3)'>";
$html .= '<span>3</span>';
$html .= '<div class="nr-icon nr-star gold"></div>';
$html .= '<div class="netreviews_rate_graph">';
$html .= "<span class='netreviews_rate_percent' onclick='refreshReviewsWithFilter(3)' style='height:" . $ratio3 . "px; background:#" . $starsColour . " !important'>";
$html .= '<span class="netreviews_rate_total">' . $count3 . '</span>';
$html .= '</span>';
$html .= '</div>';
$html .= '</li>';
$html .= "<li class='netreviews_rate_list_item' onclick='refreshReviewsWithFilter(4)'>";
$html .= '<span>4</span>';
$html .= '<div class="nr-icon nr-star gold"></div>';
$html .= '<div class="netreviews_rate_graph">';
$html .= "<span class='netreviews_rate_percent' onclick='refreshReviewsWithFilter(4)' style='height:" . $ratio4 . "px; background:#" . $starsColour . " !important'>";
$html .= '<span class="netreviews_rate_total">' . $count4 . '</span>';
$html .= '</span>';
$html .= '</div>';
$html .= '</li>';
$html .= "<li class='netreviews_rate_list_item' onclick='refreshReviewsWithFilter(5)'>";
$html .= '<span>5</span>';
$html .= '<div class="nr-icon nr-star gold"></div>';
$html .= '<div class="netreviews_rate_graph">';
$html .= "<span class='netreviews_rate_percent' onclick='refreshReviewsWithFilter(5)' style='height:" . $ratio5 . "px; background:#" . $starsColour . " !important'>";
$html .= '<span class="netreviews_rate_total">' . $count5 . '</span>';
$html .= '</span>';
$html .= '</div>';
$html .= '</li>';
$html .= '</ul>';
$html .= '</div>';
$html .= '</div>';
$html .= '<div class="netreviews_filtering_section">';
$html .= __('Sort the reviews display', 'av') . ' :';
$html .= '<select id="netreviews_reviews_filter" name="netreviews_reviews_filter" onchange="refreshReviewsWithFilter(\'' . '\')">';
$html .= '<option value="newest" selected="selected">' . __('Newest', 'av') . '</option>';
$html .= '<option value="oldest">' . __('Oldest', 'av') . '</option>';
$html .= '<option value="highest">' . __('Highest rating', 'av') . '</option>';
$html .= '<option value="lowest">' . __('Lowest rating', 'av') . '</option>';
$html .= '<option value="most_useful">' . __('The most helpful', 'av') . '</option>';
$html .= '<option style="display:none;" value="rate">' . __('Rate', 'av') . '</option>';
$html .= '</select>';
$html .= '<div id="avisVerifiesAjaxImage" style="display:none;"></div>';
$html .= '</div>';
$html .= '<div id="ajax_comment_content">';
$html .= appelAjax($id_product, $my_current_lang);
$html .= '</div>';
if ($maxPages > 1) {
    $html .= '<div id="netreviews_button_more_reviews">';
    $html .= '<a class="netreviews_button" data-idProd="' . $id_product . '" id="av_load_next_page" data-page="1" data-page-last="' . $maxPages . '"  onclick="paginationReviews(event);">';
    $html .= '<span class="display">' . __('More reviews', 'av') . '</span>';
    $html .= '</a>';
    $html .= '</div>';
}
$html .= '</div>';
$html .= '</div>';
if (ntav_getConfig('OUR_PRODUCT_RICHSNIP', $my_current_lang) == 1 && ntav_getConfig('TYPE_SNIPPET', $my_current_lang) == 'microdata' && ntav_getConfig('NEED_COMPLETE_RS', $my_current_lang) == 1) {
    $html .= '</div>';
}

return $html;