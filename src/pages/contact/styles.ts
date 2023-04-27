
import styled from "styled-components";

export const Wrapper = styled.div`
    display: grid;
    grid-template-rows: repeat(auto-fit, minmax(100px, auto));
    grid-auto-rows: auto;
    align-items: center;
    align-content: center;
    min-width: 300px;
`;

export const Row = styled.div`
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    margin: 50px 15px;
`;



export const Title = styled.h2`
    padding-top: 100px;
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 700;
    font-size: 32px;
    width: auto;
    margin-bottom: 20px;
    line-height: 44px;

    color: #000;
`;

export const TitleLogin = styled.p`
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 700;
    font-size: 32px;
    margin-bottom: 20px;
    line-height: 44px;
`;

export const SubTitleLogin = styled.p`
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 400;
    font-size: 18px;
    margin-bottom: 35px;
    line-height: 25px;
`;

export const EsqueciText = styled.p`
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 700;
    font-size: 18px;
    line-height: 19px;

    color: #E5E044;
`;

export const CriarText = styled.p`
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 700;
    font-size: 18px;
    line-height: 19px;

    color: #E23DD7;
`;