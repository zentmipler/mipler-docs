import {themes as prismThemes} from 'prism-react-renderer';
import type {Config} from '@docusaurus/types';
import type * as Preset from '@docusaurus/preset-classic';

// This runs in Node.js - Don't use client-side code here (browser APIs, JSX...)

const config: Config = {
    title: 'Mipler Docs',
    tagline: 'Mipler Docs',
    url: 'https://mipler.com',
    baseUrl: '/docs/',
    onBrokenLinks: 'throw',
    onBrokenMarkdownLinks: 'throw',
    favicon: 'https://mipler.com/assets/favicon.svg',
    trailingSlash: true,
    noIndex: true,


    presets: [
        [
            'classic',
            {
                blog: false,
                docs: {
                    sidebarPath: './sidebars.ts',
                    editUrl: 'https://github.com/mirasvit/mipler-docs/edit/main',
                    routeBasePath: '/'
                },
                theme: {
                    customCss: './src/css/custom.css',
                },
                gtag: {
                    trackingID: 'GTM-5R2S39H',
                    anonymizeIP: true
                }
            } satisfies Preset.Options,
        ],
    ],

    themeConfig: {
        // Replace with your project's social card
        image: 'img/docusaurus-social-card.jpg',
        navbar: {
            title: 'Mipler Docs',
            logo: {
                alt: 'Mipler Reports',
                src: 'https://mipler.com/assets/logo-sm.svg',
            },
            items: [
                {
                    href: 'https://mipler.com/',
                    label: 'Homepage',
                    position: 'right'
                },
                {
                    href: 'https://github.com/mirasvit/mipler-docs',
                    label: 'GitHub',
                    position: 'right',
                },
            ],
        },
        footer: {
            style: 'dark',
            links: [],
            copyright: `Copyright © ${new Date().getFullYear()} Mipler.`
        },
        prism: {
            theme: prismThemes.github,
            darkTheme: prismThemes.dracula,
        },
    } satisfies Preset.ThemeConfig,
};

export default config;
