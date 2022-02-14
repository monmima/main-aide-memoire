# Using media queries

    /*MEDIA QUERIES*/
    @media screen and (max-width: 759px) {
        body
        {
            font-size: 0.8em;         
        }
        /* NO MORE GRID HERE, ONLY FLEX */
        main {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: center;
        }
    }
    @media screen and (min-width: 760px) and (max-width: 960px) {
        body
        {
            font-size: 1em;
        }
        div, figure, figcaption {
            width: 150px;
        }
    }
    @media screen and (min-width: 961px) and (max-width: 1100px) {
        body
        {
            font-size: 1.2em;
        }
        div, figure, figcaption {
            width: 200px;
        }
    }
    @media screen and (min-width: 1101px) {
        body
        {
            font-size: 1.3em;
        }
        div, figure, figcaption {
            width: 250px;
        }
    }