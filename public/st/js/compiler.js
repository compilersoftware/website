$('.modal').on('shown.bs.modal', function(e) {
    var url = '/jsemu.html?game=' + e.relatedTarget.dataset.game;
    var title = e.relatedTarget.dataset.title;
    if (e.relatedTarget.dataset.game == 'estar_guars') {
        url = '/EstarGuars/index.html';
    }
    var $target = $(this);
    $target.find('iframe').attr('src', url);
    $target.find('#js-emulator-title').html(title);
}).on('hidden.bs.modal', function() {
    $(this).find('iframe').attr('src', '');
});

$(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() >= 250) {
            $('.navbar-brand.home').css('display', 'inline');
        }
        if ($(this).scrollTop() < 250) {
            $('.navbar-brand.home').css('display', 'none');
        }
    })
});

const shareButtons = document.querySelectorAll('.share-button');

// Add click event listener to each button
shareButtons.forEach(button => {
    button.addEventListener('click', () => {
        // Get the URL of the current page
        const url = window.location.href;

        // Get the social media platform from the button's class name
        const platform = button.classList[1];

        // Set the URL to share based on the social media platform
        let shareUrl;
        switch (platform) {
            case 'facebook':
                shareUrl = `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(url)}`;
                break;
            case 'linkedin':
                shareUrl = `https://www.linkedin.com/shareArticle?url=${encodeURIComponent(url)}`;
                break;
            case 'mailshare':
                shareUrl = `mailto:?subject=${document.title}&body=${encodeURIComponent(url)}`;
                break;
            case 'pinterest':
                shareUrl = `https://pinterest.com/pin/create/button/?url=${encodeURIComponent(url)}`;
                break;
            case 'reddit':
                shareUrl = `https://reddit.com/submit?url=${encodeURIComponent(url)}`;
                break;
            case 'telegram':
                shareUrl = `https://t.me/share?url=${encodeURIComponent(url)}`;
                break;
            case 'twitter':
                shareUrl = `https://twitter.com/share?url=${encodeURIComponent(url)}`;
                break;
            case 'whatsapp':
                shareUrl = `https://api.whatsapp.com/send?text=${encodeURIComponent(url)}`;
                break;
        }

        // Open a new window to share the URL
        window.open(shareUrl, '_blank');
    });
});
