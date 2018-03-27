integratedCKEDITOR('description-page',height=200);
// integratedCKEDITOR('seo-description',height=200);
if ($('#btnBrowseImage').length) {
    var button1 = document.getElementById('btnBrowseImage');
    button1.onclick = function () {
        selectFileWithKCFinder('pathImage','showHinh');
    }
}