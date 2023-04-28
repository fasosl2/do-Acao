import React from 'react';
import { Card } from '../../components/Card';
import { UserInfo } from '../../components/UserInfo';
import { Header } from '../../components/Header';
import { Container, Title, TitleHighlight, Column, GoogleMaps } from './styles';
import { Row } from '../../styles/global';
import { ILibrary } from '../../@types/ILibrary';
const Libraries = () => {
let libData = require('../../db.json');
console.log(libData.libraries)
    return(<> 
        <Row>
            <Row>
            <GoogleMaps id="mapFrame" title="GoogleMaps"
            src="https://www.google.com/maps/embed/v1/search?q=libraries+in+Recife+-+PE,+Brasil
            &key=AIzaSyBw-DZ1eu9PNmyt3SGDs1qOvu8mxSxywpI
            &zoom=12"/>
            </Row>
            <Row>
                <Title>Bibliotecas</Title>
            <Container>
                {libData.libraries.map((library: ILibrary) => (<Card {...library}/>))}
            </Container>
{/*             <Column flex={1}>
                <TitleHighlight># RANKING TOP 5 DA SEMANA</TitleHighlight> 
                <UserInfo percentual={80} nome="Flávio Oliveira" image='https://avatars.githubusercontent.com/u/66625225?v=4'/>
                <UserInfo percentual={27} nome="Flávio Oliveira" image='https://avatars.githubusercontent.com/u/66625225?v=4'/>
                <UserInfo percentual={89} nome="Flávio Oliveira" image='https://avatars.githubusercontent.com/u/66625225?v=4'/>
                <UserInfo percentual={57} nome="Flávio Oliveira" image='https://avatars.githubusercontent.com/u/66625225?v=4'/>
                <UserInfo percentual={12} nome="Flávio Oliveira" image='https://avatars.githubusercontent.com/u/66625225?v=4'/>
            </Column> */}
            </Row>
        </Row>
    </>)
}

export { Libraries }