import styled from "styled-components";
import { IColumn } from "./types";

export const Container = styled.main`
  width: 100%;
  margin: 0 auto;

  display: grid;
  grid-template-columns: 1fr;
  gap: 1%;

  
  @media screen and (min-width: 750px) {
    grid-template-columns: 1fr 1fr;
}
@media screen and (min-width: 1200px) {
  grid-template-columns: 1fr 1fr 1fr;
}
`;

export const Title = styled.h3`
  font-family: "Open Sans";
  font-style: normal;
  font-weight: 700;
  font-size: 18px;
  line-height: 25px;
  color: #000;
  margin-bottom: 24px;
`;

export const TitleHighlight = styled.h3`
  font-family: "Open Sans";
  font-style: normal;
  font-weight: 700;
  font-size: 17px;
  line-height: 25px;
  color: #ffffff70;
  margin-bottom: 24px;
`;

export const Column = styled.div<IColumn>`
  flex: ${({ flex }) => flex};
  padding-right: 24px;
`;

export const GoogleMaps = styled.iframe`
  width: 100%;
  height: 40vh;
  display: none;
  
  @media screen and (min-width: 750px) {
    display: block;
}
`;
