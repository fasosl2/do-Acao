import styled, { css }  from 'styled-components';
import { ILeftMenuPanel } from './types';

export const Container = styled.div`
    width: 100%;
    height: 100%;
    z-index: 5;
    
    display: grid;
    grid-template-columns: 3fr 1fr;
    margin: 0 auto;
    background-color: #6200EE;

    
`;

export const Row = styled.div`
    height: 100%;
    display: flex;
    flex-direction: row;
    align-items: center;
    z-index: 5;
`;

export const LeftRow = styled.div`
    display: grid;
    z-index: 4;
    grid-auto-rows: max-content;
    @media screen and (min-width: 750px) {
        grid-auto-rows: auto;
        grid-template-columns: 1fr 1fr 1fr 1fr;
    }
`;

export const LeftRowContainer = styled.div<ILeftMenuPanel>`
    @media screen and (min-width: 750px) {
        position: relative;
        left: auto;
        top: auto;
        grid-template-columns: 1fr 1fr 1fr 1fr;
    }

    display: grid;
    grid-template-columns: 1fr;
    transition: left 0.5s;
    position: fixed;
    left: -60%;
    width: 60%;
    top: 3.4em;
    height: 100%;
    z-index: 4;    
    background-color: #6200EE;

    ${({status})=>status === true && css` 
        left: 0;
    `}
`;

export const HamburguerMenuButon  = styled.img`
    padding: 10px;
    display: absolute;
    width: 30px;
    height: 100%;
    z-index: 6;

    @media screen and (min-width: 750px) {
        display: none;
    }
`;

export const RightRow = styled.div`
    display: grid;
    align-itens: right;
    z-index: 4;
    @media screen and (min-width: 750px) {
        grid-template-columns: 1fr 1fr 1fr 1fr;
    }
`;

export const RightRowContainer = styled.div<ILeftMenuPanel>`
    @media screen and (min-width: 750px) {
        position: relative;
        left: auto;
        top: auto;
        grid-template-columns: 1fr 1fr 1fr 1fr;
        height: 100%;
    }


    display: grid;
    grid-template-columns: 1fr;
    transition: top 0.5s;
    position: fixed;
    top: -50%;
    right: 0;
    width: 50%;
    z-index: 1;
    background-color: #6200EE;

    ${({status})=>status === true && css` 
        top: 3.45em;
    `}
`;

export const RightMenuButon  = styled.img`
    padding: 10px;
    display: absolute;
    width: 25px;
    height: 28px;
    margin-left: auto;
    width: auto;
    z-index: 6;

    @media screen and (min-width: 750px) {
        display: none;
    }
`;

export const Column  = styled.div`
    display:flex;
    flex-direction: column;
    align-items: center;    
`;

export const Wrapper  = styled.div`
    background-color: #6200EE;
    width: 100%;
    height: 3.4em;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 5;
`;

export const Menu  = styled.a`
    font-family: 'Open Sans';
    font-style: normal;
    font-size: 18px;
    line-height: 25px;
    color: #FFFFFF;
    margin-right: 12px;
    text-decoration: none;
`;

export const MenuItem  = styled.a`
    font-family: 'Open Sans';
    font-style: normal;
    font-size: 1.3em;
    color: #FFFFFF;
    padding: 0 15px;
    display: grid;
    align-content: center;
    height: 5em;
    text-decoration: none;

    &:hover {
        background-color: #3700B3;
        cursor: pointer;
    }
    @media screen and (min-width: 750px) {
        height: 100%;
    }
`;

export const UserPicture  = styled.img`
    width: 32px;
    height: 32px;
    border-radius: 22px;
    border: 2px solid #FFFFFF;
`;

export const Input  = styled.input`
    background: transparent;
    flex:1;
    border: 0;
    color: #FFF;
`;


export const HomePicture  = styled.img`
    width: 2.7em;
    height: 80%;
    margin: 0 10px;
`;

export const BuscarInputContainer  = styled.div`
    width: 175px;
    height: 30px;
    background: #6200EE;
    border-radius: 8px;
    padding: 2px 5px;
    margin: 0 12px;

    display: flex;
    align-items: center;
    justify-content: center;
`;