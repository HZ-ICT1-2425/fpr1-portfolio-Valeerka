import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',

                //styles
                'resources/css/index.css',
                'resources/css/styles.css',
                'resources/css/profile.css',
                'resources/css/dashboard.css',
                'resources/css/faq.css',
                'resources/css/blog.css',

                //images welcome
                'resources/images/Welcome/GifButtonsHere.webp',
                'resources/images/Welcome/GifHackerMan.webp',
                'resources/images/Welcome/GifLittleGirl.webp',
                'resources/images/Welcome/StickerBlackCat.png',
                'resources/images/Welcome/StickerStars.png',
                'resources/images/Welcome/StickerTapeBottomPageBegin.png',
                'resources/images/Welcome/StickerTapeTopPageBegin.png',
                'resources/images/Welcome/StickerTapeTopPageEnd.png',

                //images All Pages
                'resources/images/AllPages/dotsBanner.png',
                'resources/images/AllPages/NavBarBackground.gif',
                'resources/images/AllPages/NewBackGround.gif',
                'resources/images/AllPages/newBackGroundTest.png',
                'resources/images/AllPages/newBanner.gif',
                'resources/images/AllPages/WebsiteMainBackground.gif',

                //images Profile
                'resources/images/Profile/Dogs01.jpg',
                'resources/images/Profile/Dogs02.jpg',
                'resources/images/Profile/Dogs03.jpg',
                'resources/images/Profile/Dogs04.jpg',
                'resources/images/Profile/Dogs05.jpg',
                'resources/images/Profile/Dogs06.jpg',
                'resources/images/Profile/Dogs07.jpg',
                'resources/images/Profile/Dogs08.jpg',
                'resources/images/Profile/Dogs09.jpg',
                'resources/images/Profile/Dogs10.jpg',
                'resources/images/Profile/Dogs11.jpg',
                'resources/images/Profile/Dogs12.jpg',
                'resources/images/Profile/Dogs13.jpg',
                'resources/images/Profile/Dogs14.jpg',
                'resources/images/Profile/Dogs15.jpg',
                'resources/images/Profile/Dogs16.jpg',
                'resources/images/Profile/Dogs17.jpg',
                'resources/images/Profile/Dogs18.jpg',
                'resources/images/Profile/Dogs19.jpg',
                'resources/images/Profile/LinkPictogramEmail.png',
                'resources/images/Profile/LinkPictogramEmailNew.png',
                'resources/images/Profile/LinkPictogramGithub.png',
                'resources/images/Profile/LinkPictogramGithubNew.png',
                'resources/images/Profile/LinkPictogramInstagram.png',
                'resources/images/Profile/LinkPictogramInstagramNew.png',
                'resources/images/Profile/moviePosteriZombie.jpg',
                'resources/images/Profile/moviePosterKaos.jpg',
                'resources/images/Profile/moviePosterLoki.jpg',
                'resources/images/Profile/moviePosterTheBlacklist.jpg',
                'resources/images/Profile/moviePosterTheGoodPlace.jpg',
                'resources/images/Profile/ProfilePictureSelfie.jpg',
                'resources/images/Profile/SpotifyArtistBSD.png',
                'resources/images/Profile/SpotifyArtistNascar.png',
                'resources/images/Profile/SpotifyArtistOliver.png',
                'resources/images/Profile/SpotifyArtistVira.png',
                'resources/images/Profile/StickerFilmCamera.png',
                'resources/images/Profile/StickerGreenUnderlineForText.png',
                'resources/images/Profile/StickerHearts.png',
                'resources/images/Profile/StickerSelfieBorder.png',
                'resources/images/Profile/StickerSun.png',

                //images dashboard
                'resources/images/Dashboard/StickerSmileyFace.png',

                //images Faq
                'resources/images/Faq/GifOverlayGlitter.gif',

                //images Blog
                'resources/images/Blog/Blog01BannerSWOT.png',
                'resources/images/Blog/Blog02BannerHzBuilding.jpg',
                'resources/images/Blog/Blog03BannerCloud.jpg',
            ],
            refresh: true,
            //styles

            }),
    ],
});
