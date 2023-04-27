import styled, { createGlobalStyle } from "styled-components";

export const GlobalStyle = createGlobalStyle`
*{
    margin: 0;
    padding: 0;
    font-family:'Open Sans';
}

body{
    background-color: #EEE;
    color: #000;
    font-family:'Open Sans';
}
`;


export const Container = styled.main`
    width: 90%;
    margin: 0% 3%;
    display: grid;
    grid-template-columns: 1fr;

    @media screen and (min-width: 750px) {
        margin: 0% 2%; 
        grid-template-columns: 1fr 1fr;
    }
    
`;


export const Row = styled.main`
    width: 90%;
    margin: 0% 3%;
    display: grid;
    grid-template-rows: 1fr;

    @media screen and (min-width: 750px) {
        margin: 0% 2%; 
    }
    
`;

export const ContainerSection = styled.div`
    display: grid;
    grid-template-columns: 1fr;
    grid-template-rows: repeat(auto-fit, minmax(100px, auto));
    grid-auto-rows: auto;
    align-items: center;
    align-content: center;
    width: 100%;
    padding: 10px;
    min-height: 44vh;
    @media screen and (min-width: 750px) {
        min-height: 90vh;
    }
`;