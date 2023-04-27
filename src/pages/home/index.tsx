import React from 'react';

import { useNavigate } from 'react-router-dom';

import  bannerImage from '../../assets/logo.png'
import { Button } from '../../components/Button';
import {Container, ContainerSection} from '../../styles/global';

import { Title, TitleHighlight, TextContent, HomeBanner } from './styles';
const Home = () => {
    const navigate = useNavigate();

    const handleClickSignIn = () => {
        navigate('/login')
    }
    return(<> 
        <Container>
            <ContainerSection>
                <Title>
                    <TitleHighlight>
                        Do-Ação
                        <br />
                    </TitleHighlight>
                    Doe Livros, doe conhecimento
                </Title>
                <TextContent>
                    Conectando possíveis doadores à bibliotecas por todo o Brasil. 
                    Entre, repasse conhecimento e ajude o meio ambiente.
                </TextContent>
                <Button title="Começar agora" variant='secondary' onClick={handleClickSignIn} />
            </ContainerSection>
            <ContainerSection>
                <HomeBanner src={bannerImage} alt="Imagem Principal" />
            </ContainerSection>
        </Container>
    </>)
}

export { Home }