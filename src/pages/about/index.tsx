import  bannerImage from '../../assets/logo.png'
import {Container, ContainerSection} from '../../styles/global';

import { Title, TitleHighlight, TextContent, HomeBanner } from './styles';
const About = () => {

    return(<>
        <Container>
            <ContainerSection>
                <HomeBanner src={bannerImage} alt="Imagem Principal" />
            </ContainerSection>
            <ContainerSection>
                <Title>
                    <TitleHighlight>
                        Do-Ação
                        <br />
                    </TitleHighlight>
                    Doe Livros, doe conhecimento
                </Title>
                <TextContent>
                <p className="mdl-typography--font-light">
                <p>O Do-Ação surgiu da necessidade de descartar ou
					doar os livros que não eram mais utilizados e da dificuldade de encontrar onde e como fazê-lo.
					Muitas pessoas estão com as estantes cheias de livros que não
					estão sendo mais ulizados e querem se desfazer.</p>
				<p>Por isso criamos um site que traga as informações necessárias
					para auxiliar quem deseje doar seus livros. Esta é uma maneira
					inteligente de resolver o problema, entrar em contato com a
					biblioteca e doar seu livro usado.</p>
				<p>Para que as bibliotecas estejam sempre renovadas, é necessário
					que recebam livros novos e diferentes para atrair o público que
					sempre está em busca de histórias e conteúdos novos.</p>
				<p>Vamos ajudando a disseminar o conhecimento para quem precisa do
					livro. A leitura é essencial para construção de uma sociedade
					mais culta.</p>
				</p>
                </TextContent>
            </ContainerSection>
        </Container>
    </>)
}

export { About }