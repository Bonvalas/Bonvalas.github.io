var Diapo = (function () {
    let self = {},
            config = {
                duration: 6,
                container: {
                    width: 0,
                    height: 0
                }
            };

    setOptions = function () {
        if (typeof options === 'object' &&
                Object.keys(options).length > 0)
        {
            for (var property in options)
            {
                if (config[property] !== undefined)
                {
                    config[property] = options[property];
                }
            }
        }
    };
    self.init = function (opts) {
        options = opts || {};

        setOptions();

        execute();
    };
    execute = function () {
        container = document.querySelector('#diapo-container');
        slideshow = document.querySelector('#diapo');
        images = Array.from(document.querySelectorAll('.diapo-image'));

        if ((config.container.width && config.container.height) > 0)
        {
            setContainerStyle();
        }

        i = -1;

        play();
    };
    setContainerStyle = function () {
        container.style.position = 'relative';
        container.style.width = config.container.width + 'px';
        container.style.height = config.container.height + 'px';

        if (config.container.border !== undefined)
        {
            container.style.borderWidth = config.container.border.width + 'px';
            container.style.borderStyle = config.container.border.style;
            container.style.borderColor = config.container.border.color;
        }
    };
    play = function () {
        slideshow.classList.add('fadeOut');

        setTimeout(function () {
            slideshow.style.background = 'url(' + images[i].src + ') center';
            slideshow.style.backgroundSize = 'cover';
            slideshow.classList.remove('fadeOut');
        }, 1000);

        i++;
        if (i === images.length)
        {
            i = 0;
        }
        setTimeout(play, config.duration * 500);
    };

    return self;
})();

Diapo.init(
        {
            container: {
                width: 1000,
                height: 500
            }
        });


function resizePage()
{
    var Largeur = $(window).width();
    if (Largeur < 768) {

        Diapo.init(
                {
                    container: {
                        width: 500,
                        height: 250
                    }
                });
    }
    }
