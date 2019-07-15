/**
 * Generate XML SiteMaps
 * Buttons on the main page trigger the functionality
 */
$('.js-generate-xml').on('click', function () {
    let locale = $(this).data('locale');
    window.location.href = window.location.href + 'sitemap.xml?locale=' + locale;
});