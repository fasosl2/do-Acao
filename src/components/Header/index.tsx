import React, { useState } from 'react';
import logo from '../../assets/logo.png';
import hMenu from '../../assets/h-menu.svg';
import rMenu from '../../assets/r-menu-vertical.png';
import { useNavigate } from 'react-router-dom';

import { 
    //BuscarInputContainer,
    //Column,
    Container,
    //Input,
    //Menu,
    Row,
    LeftRow,
    LeftRowContainer,
    RightRow,
    RightRowContainer,
    UserPicture,
    HomePicture,
    HamburguerMenuButon,
    RightMenuButon,
    MenuItem,
    Wrapper
} from "./styles";
import { IHeader } from './types';
const Header = ({autenticado}: IHeader) => {
    const navigate = useNavigate();

    const handleClickNavigate = (ref: any) => {
        navigate('/' + (typeof ref === 'string' ? ref : ''))
    }

    window.addEventListener('click',(e)=>handleClickMenu(e,''))

    const [activePanel, setActivePanel] = useState('');
    
    const handleClickMenu = (event: any, panel: string) => {
        event?.stopPropagation();
        setActivePanel(activePanel === panel ? '' : panel);
    }
    
    return(
    <Wrapper >
                
        <Container >
            <Row >
                <HamburguerMenuButon src={hMenu} alt="Left Menu Button" onClick={(e) => handleClickMenu(e,'leftPanel')}/>
                <HomePicture src={logo} alt="logo Do-Ação" onClick={handleClickNavigate}/>
                <LeftRowContainer  status={activePanel === 'leftPanel'}>
                    <LeftRow>
                        <MenuItem onClick={handleClickNavigate}>Home</MenuItem>
                        <MenuItem onClick={() => handleClickNavigate('libraries')}>Bibliotecas</MenuItem>
                        <MenuItem onClick={() => handleClickNavigate('about')}>Sobre</MenuItem>
                        <MenuItem onClick={() => handleClickNavigate('contact')}>Contato</MenuItem>
                    </LeftRow>
                </LeftRowContainer>
            </Row>
            <Row >
                <RightRowContainer  status={activePanel === 'rightPanel'}>
                    <RightRow>
                        {autenticado ? (
                            <>
                                <UserPicture src="https://avatars.githubusercontent.com/u/66625225?v=4"/>
                            </>
                            ) : (
                            <>
                            <MenuItem onClick={() => handleClickNavigate('login')}>Entrar</MenuItem>
                            <MenuItem onClick={() => handleClickNavigate('login')}>Cadastrar</MenuItem>
                            </>

                            )}
                    </RightRow>
                </RightRowContainer>
                <RightMenuButon src={rMenu} alt="Menu Login" onClick={(e) => handleClickMenu(e,'rightPanel')}/>
            </Row>
        </Container>
    </Wrapper>)
}

export { Header }