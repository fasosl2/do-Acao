import React from 'react';
import { Card } from '../../components/Card';
import { UserInfo } from '../../components/UserInfo';
import { Header } from '../../components/Header';
import { Container, Title, TitleHighlight, Column } from './styles';
const Feed = () => {
    return(<> 
        <Header autenticado={true}/>
        <Container>
            <Column flex={3}>
                <Title>Feed</Title> 
                <Card />
                <Card />
                <Card />
                <Card />
                <Card />
                <Card />
                <Card />
                <Card />
                <Card />
            </Column>
            <Column flex={1}>
                <TitleHighlight># RANKING TOP 5 DA SEMANA</TitleHighlight> 
                <UserInfo percentual={80} nome="Flávio Oliveira" image='https://avatars.githubusercontent.com/u/66625225?v=4'/>
                <UserInfo percentual={27} nome="Flávio Oliveira" image='https://avatars.githubusercontent.com/u/66625225?v=4'/>
                <UserInfo percentual={89} nome="Flávio Oliveira" image='https://avatars.githubusercontent.com/u/66625225?v=4'/>
                <UserInfo percentual={57} nome="Flávio Oliveira" image='https://avatars.githubusercontent.com/u/66625225?v=4'/>
                <UserInfo percentual={12} nome="Flávio Oliveira" image='https://avatars.githubusercontent.com/u/66625225?v=4'/>
            </Column>
        </Container>
    </>)
}

export { Feed }