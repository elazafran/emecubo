'use strict';
//https://newsapi.org/v2/sources?apiKey=cc7baf6c7a0b44d4814e926312bc07df
//https://newsapi.org/v2/top-headlines?country=us&category=business&apiKey=cc7baf6c7a0b44d4814e926312bc07df
const apiKey = 'cc7baf6c7a0b44d4814e926312bc07df';
const main = document.querySelector('main');
const sourceSelect = document.querySelector('#sourceSelect');
const defaultSource = 'the-washington-post';

window.addEventListener('load', async e => {


    if ('serviceWorker' in navigator) {
        try {
            navigator.serviceWorker.register('sw.js');
            // console.log(`SW registered`);

        } catch (error) {
            console.log(`Fail SW register`);
        }
    }
});

async function updateSources() {

    const res = await fetch(`https://newsapi.org/v2/sources?apiKey=cc7baf6c7a0b44d4814e926312bc07df`);
    const json = await res.json();
    sourceSelect.innerHTML = json.sources.map(source => `<option value="${source.id}">${source.name}</option>`).join('\n');
}
async function updateNews(source = defaultSource) {
    const res = await fetch(`https://newsapi.org/v2/top-headlines?sources=${source}&sortBy=top&apiKey=${apiKey}`);
    const json = await res.json();
    //main.innerHTML = json.articles.map(createArticle).join('\n');
}

/************** Menu **************/