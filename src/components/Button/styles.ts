import styled, { css } from 'styled-components';
import { IButtonStyled } from './types';

export const ButtonContainer = styled.button<IButtonStyled>`
    background: #EEE;
    border-radius: 22px;
    position: relative;

    color: #000;
    padding: 5px 12px;
    min-width: 120px;
    width: 100%;
    height: fit-content;
    
    &:hover {
        opacity: 0.6;
        cursor: pointer;
    }

    ${({variant})=>variant !== "primary" && css`
        min-width: 120px;
        color: #FFF;
        background: #6200EE;
        &::after {
            content: '';
            position: absolute;
            border: 1px solid #6200EE;
            top:-5px;
            left:-6px;
            width: calc(100% + 10px);
            height: calc(100% + 10px);
            border-radius: 22px;
        }
    `}
`;